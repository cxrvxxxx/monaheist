<?php
include("player.php");
include("shoplisting.php");
include("perk.php");
include("shop.php");

class DBHelper {
    /*
    Class for handling Database-related operations

    Attributes:
        conn
            - Connection object.
            Return:
                - Union: mysqli, null

    Methods:
        init_db()
            - Initializes database. Creates all necessary tables.
            Return:
                - None

        getAllShopListings()
            - Fetches all shop listing entries from the database.
            Return:
                - Array: ShopListing

        getShopListingById()
            - Fetches a shop listing entry matching the specified ID.
            Parameters:
                id
                    - ID of the entry to fetch.
            Return:
                - Union: ShopListing, null

        addShopListing()
            - Adds a shop listing entry to the database.
            Parameters:
                perk
                    - Perk being listed for sale.
                shop
                    - Shop where the perk is for sale.
                stock
                    - Quantity of perk for sale.
                price
                    - Selling price,
            Return:
                - null

        updateShopListing()
            - Updates a shop listing record in the database.
            Parameters:
                shopListing
                    - Updated shop listing
            
            Return:
                - null
                
    
    */
    private $conn;

    public function __construct() {
        $config_json = file_get_contents("mysql_conf.json");
        $sql_config = json_decode($config_json, true);

        $this -> conn = new mysqli($sql_config["host"], $sql_config["username"], $sql_config["password"], $sql_config["database"]);

        if (!$this -> conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $this -> init_db();
    }

    public function init_db() {
        if (!$this -> conn) return;

        mysqli_query($this -> conn, "
        CREATE TABLE IF NOT EXISTS tblBank (
            id INT PRIMARY KEY AUTO_INCREMENT,
            balance INT
        )
        ");

        mysqli_query($this -> conn, "
        CREATE TABLE IF NOT EXISTS tblPlayer (
            id INT PRIMARY KEY AUTO_INCREMENT,
            level INT,
            experience INT,
            cash INT,
            bankId INT,
            dateJoined DATETIME,
            FOREIGN KEY (bankId) REFERENCES tblBank (id)
        )
        ");

        mysqli_query($this -> conn, "
        CREATE TABLE IF NOT EXISTS tblDeveloper (
            id INT PRIMARY KEY,
            level INT,
            dateJoined DATETIME,
            FOREIGN KEY (id) REFERENCES tblPlayer (id)
        )
        ");

        mysqli_query($this -> conn, "
        CREATE TABLE IF NOT EXISTS tblModerator (
            id INT PRIMARY KEY,
            level INT,
            dateJoined DATETIME,
            FOREIGN KEY (id) REFERENCES tblPlayer (id)
        )
        ");

        mysqli_query($this -> conn, "
        CREATE TABLE IF NOT EXISTS tblPerk (
            id INT PRIMARY KEY AUTO_INCREMENT,
            name VARCHAR(30),
            description VARCHAR(255),
            expMultiplier FLOAT,
            cashMultiplier FLOAT,
            devId INT,
            dateCreated DATETIME,
            FOREIGN KEY (devId) REFERENCES tblDeveloper (id)
        )
        ");

        mysqli_query($this -> conn, "
        CREATE TABLE IF NOT EXISTS tblPlayerPerk (
            id INT PRIMARY KEY,
            perkId INT,
            quantity INT,
            FOREIGN KEY (id) REFERENCES tblPlayer (id),
            FOREIGN KEY (perkId) REFERENCES tblPerk (id)
        )
        ");

        mysqli_query($this -> conn, "
        CREATE TABLE IF NOT EXISTS tblBankTransaction (
            id INT PRIMARY KEY AUTO_INCREMENT,
            senderId INT,
            receiverId INT,
            bankId INT,
            amount INT,
            dateProcessed DATETIME,
            FOREIGN KEY (senderId) REFERENCES tblPlayer (id),
            FOREIGN KEY (receiverId) REFERENCES tblPlayer (id),
            FOREIGN KEY (bankId) REFERENCES tblBank (id)
        )
        ");

        mysqli_query($this -> conn, "
        CREATE TABLE IF NOT EXISTS tblShop (
            id INT PRIMARY KEY AUTO_INCREMENT,
            name VARCHAR(30),
            description VARCHAR(255),
            dateCreated DATETIME
        )
        ");

        mysqli_query($this -> conn, "
        CREATE TABLE IF NOT EXISTS tblPurchase (
            id INT PRIMARY KEY AUTO_INCREMENT,
            perkId INT,
            quantity INT,
            buyerId INT,
            datePurchased DATETIME,
            FOREIGN KEY (perkId) REFERENCES tblPerk (id),
            FOREIGN KEY (buyerId) REFERENCES tblPlayer (id)
        )
        ");

        mysqli_query($this -> conn, "
        CREATE TABLE IF NOT EXISTS tblShopListing (
            id INT PRIMARY KEY AUTO_INCREMENT,
            perkId INT,
            shopId INT,
            stock INT,
            price INT,
            dateAdded DATETIME,
            FOREIGN KEY (perkId) REFERENCES tblPerk (id),
            FOREIGN KEY (shopId) REFERENCES tblShop (id)
        )
        ");
    }

    public function getAllShopListings() {
        $sql = "SELECT * FROM tblShopListing";
        
        $resultset = mysqli_query($this -> conn, $sql);

        $listings = array();

        while($row = $resultset -> fetch_assoc()) {
            $listings[] = new ShopListing(
                $row['id'],
                $row['perkId'],
                $row['shopId'],
                $row['stock'],
                $row['price'],
                $row['dateAdded']
            );
        }

        return $listings;
    }

    public function getShopListingById($id) {
        $sql = "SELECT * FROM tblShopListing WHERE id=".$id;

        $resultset = mysqli_query($this -> conn, $sql);

        $row = $resultset -> fetch_assoc();

        if (!$row) return;

        return new ShopListing(
            $row['id'],
            $row['perkId'],
            $row['shopId'],
            $row['stock'],
            $row['price'],
            $row['dateAdded']
        );
    }

    public function addShopListing(Perk $perk, Shop $shop, int $stock, int $price) {
        $sql = "INSERT INTO tblShopListing (perkId, shopId, stock, price, dateAdded) VALUES (".$perk -> getId().", ".$shop -> getId().", ".$stock.", ".$price.", NOW())";

        mysqli_query($this -> conn, $sql);
    }

    public function updateShopListing(ShopListing $shopListing) {
        $sql = "UPDATE tblShopListing SET stock=".$shopListing -> getStock().", price=".$shopListing -> getPrice()." WHERE id=".$shopListing -> getId();

        mysqli_query($this -> conn, $sql);
    }

    public function deleteShopListing(ShopListing $shopListing) {
        $sql = "DELETE FROM tblShopListing WHERE id=".$shopListing -> getId();

        mysqli_query($this -> conn, $sql);
    }

    public function addPurchase(Perk $perk, int $quantity, Player $buyer) {
        $sql = "INSERT INTO tblPurchase (perkId, quantity, buyerId) VALUES (".$perk -> getId().", ".$quantity.", ".$buyer -> getId().")";
        mysqli_query($this -> conn, $sql);
    }

    public function getAllPlayers() {
        $sql = "SELECT * FROM tblPlayer";

        $resultset =  mysqli_query($this -> conn, $sql);

        $players = array();
        while ($row = $resultset -> fetch_assoc()) {
            $players[] = new Player(
                $row['id'],
                $row['level'],
                $row['experience'],
                $row['cash'],
                $row['bankId'],
                $row['dateJoined']
            );
        }

        return $players;
    }

    public function getPlayerById(int $id) {
        $sql = "SELECT * FROM tblPlayer WHERE id=".$id;

        $resultset = mysqli_query($this -> conn, $sql);

        $row = $resultset -> fetch_assoc();

        if (!$row) return;

        return new Player(
            $row['id'],
            $row['level'],
            $row['experience'],
            $row['cash'],
            $row['bankId'],
            $row['dateJoined']
        );
    }

    public function updatePlayer(Player $player) {
        $sql = "UPDATE tblPlayer SET level=".$player -> getLevel().", experience=".$player -> getExperience().", cash=".$player -> getCash();

        mysqli_query($this -> conn, $sql);
    }

    public function deletePlayer(Player $player) {
        $sql = "DELETE FROM tblPlayer WHERE id=".$player -> getId();

        mysqli_query($this -> conn, $sql);
    }

    public function getAllPurchases() {
        $sql = "SELECT * FROM tblPurchase";
        return mysqli_query($this -> conn, $sql);
    }

    public function getAllShops() {
        $sql = "SELECT * FROM tblShop";
        return mysqli_query($this -> conn, $sql);
    }

    public function getAllDevelopers() {
        $sql = "SELECT * FROM tblDeveloper";
        return mysqli_query($this -> conn, $sql);
    }

    public function getAllModerators() {
        $sql = "SELECT * FROM tblModerator";
        return mysqli_query($this -> conn, $sql);
    }

    public function getPerkByName($perkName) {
        $sql = "SELECT * FROM tblPerk WHERE name=".$perkName;
        $resultset = mysqli_query($this -> conn, $sql);

        $row = $resultset -> fetch_assoc();

        if (!$row) return null;

        return new Perk(
            $row['id'],
            $row['name'],
            $row['description'],
            $row['expMultiplier'],
            $row['cashMultiplier'],
            $row['devId'],
            $row['dateCreated']
        );
    }
}
?>