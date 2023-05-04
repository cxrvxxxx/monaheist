<?php
include("player.php");
include("shoplisting.php");
include("perk.php");
include("shop.php");
include("purchase.php");
include("developer.php");
include("moderator.php");
include("playerperk.php");

class DBHelper
{
    private $conn;

    public function __construct()
    {
        $config_json = file_get_contents("mysql_conf.json");
        $sql_config = json_decode($config_json, true);

        $this->conn = new mysqli($sql_config["host"], $sql_config["username"], $sql_config["password"], $sql_config["database"]);

        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $this->init_db();
    }

    public function init_db()
    {
        if (!$this->conn)
            return;

        mysqli_query($this->conn, "
        CREATE TABLE IF NOT EXISTS tblBank (
            id INT PRIMARY KEY AUTO_INCREMENT,
            balance INT
        )
        ");

        mysqli_query($this->conn, "
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

        mysqli_query($this->conn, "
        CREATE TABLE IF NOT EXISTS tblDeveloper (
            id INT PRIMARY KEY,
            level INT,
            dateJoined DATETIME,
            FOREIGN KEY (id) REFERENCES tblPlayer (id)
        )
        ");

        mysqli_query($this->conn, "
        CREATE TABLE IF NOT EXISTS tblModerator (
            id INT PRIMARY KEY,
            level INT,
            dateJoined DATETIME,
            FOREIGN KEY (id) REFERENCES tblPlayer (id)
        )
        ");

        mysqli_query($this->conn, "
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

        mysqli_query($this->conn, "
        CREATE TABLE IF NOT EXISTS tblPlayerPerk (
            id INT PRIMARY KEY,
            perkId INT,
            quantity INT,
            FOREIGN KEY (id) REFERENCES tblPlayer (id),
            FOREIGN KEY (perkId) REFERENCES tblPerk (id)
        )
        ");

        mysqli_query($this->conn, "
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

        mysqli_query($this->conn, "
        CREATE TABLE IF NOT EXISTS tblShop (
            id INT PRIMARY KEY AUTO_INCREMENT,
            name VARCHAR(30),
            description VARCHAR(255),
            dateCreated DATETIME
        )
        ");

        mysqli_query($this->conn, "
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

        mysqli_query($this->conn, "
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

    public function getAllShopListings()
    {
        $sql = "SELECT * FROM tblShopListing";

        $resultset = mysqli_query($this->conn, $sql);

        $listings = array();

        while ($row = $resultset->fetch_assoc()) {
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

    public function getShopListingById(int $id)
    {
        $sql = "SELECT * FROM tblShopListing WHERE id=" . $id;

        $resultset = mysqli_query($this->conn, $sql);

        $row = $resultset->fetch_assoc();

        if (!$row)
            return;

        return new ShopListing(
            $row['id'],
            $row['perkId'],
            $row['shopId'],
            $row['stock'],
            $row['price'],
            $row['dateAdded']
        );
    }

    public function getShopListingByShop(int $shopId)
    {
        $sql = "SELECT * FROM tblShopListing WHERE shopId=" . $shopId;

        $resultset = mysqli_query($this->conn, $sql);

        $shopListings = array();
        while ($row = $resultset->fetch_assoc()) {
            $shopListings[] = new ShopListing(
                $row['id'],
                $row['perkId'],
                $row['shopId'],
                $row['stock'],
                $row['price'],
                $row['dateAdded']
            );
        }
    }

    public function addShopListing(Perk $perk, Shop $shop, int $stock, int $price)
    {
        $sql = "INSERT INTO tblShopListing (perkId, shopId, stock, price, dateAdded) VALUES (" . $perk->getId() . ", " . $shop->getId() . ", " . $stock . ", " . $price . ", NOW())";

        mysqli_query($this->conn, $sql);
    }

    public function updateShopListing(ShopListing $shopListing)
    {
        $sql = "UPDATE tblShopListing SET stock=" . $shopListing->getStock() . ", price=" . $shopListing->getPrice() . " WHERE id=" . $shopListing->getId();

        mysqli_query($this->conn, $sql);
    }

    public function deleteShopListing(ShopListing $shopListing)
    {
        $sql = "DELETE FROM tblShopListing WHERE id=" . $shopListing->getId();

        mysqli_query($this->conn, $sql);
    }

    public function getAllPlayers()
    {
        $sql = "SELECT * FROM tblPlayer";

        $resultset = mysqli_query($this->conn, $sql);

        $players = array();
        while ($row = $resultset->fetch_assoc()) {
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

    public function getPlayerById(int $id)
    {
        $sql = "SELECT * FROM tblPlayer WHERE id=" . $id;

        $resultset = mysqli_query($this->conn, $sql);

        $row = $resultset->fetch_assoc();

        if (!$row)
            return;

        return new Player(
            $row['id'],
            $row['level'],
            $row['experience'],
            $row['cash'],
            $row['bankId'],
            $row['dateJoined']
        );
    }

    public function getOwnedPerks(Player $player)
    {
        $sql = "SELECT * FROM tblPlayerPerk WHERE playerId=" . $player->getId();

        $resultset = mysqli_query($this->conn, $sql);

        $playerPerks = array();
        while ($row = $resultset->fetch_assoc()) {
            $playerPerks[] = new PlayerPerk(
                $row['id'],
                $row['playerId'],
                $row['perkId'],
                $row['quantity']
            );
        }

        $perks = array();
        foreach ($playerPerks as $playerPerk) {
            $perks[] = $this->getPerkById($playerPerk->getId());
        }

        return $perks;
    }

    public function addPlayer()
    {
        $bankId = $this->addBank();

        $sql = "INSERT INTO tblPlayer (level, experience, cash, bankId, dateJoined) VALUES (1, 0, 0, " . $bankId . ", NOW())";

        mysqli_query($this->conn, $sql);
    }

    public function updatePlayer(Player $player)
    {
        $sql = "UPDATE tblPlayer SET level=" . $player->getLevel() . ", experience=" . $player->getExperience() . ", cash=" . $player->getCash();

        mysqli_query($this->conn, $sql);
    }

    public function deletePlayer(Player $player)
    {
        $bank = $this->getBankById($player->getBankId());
        $this->deleteBank($bank);

        $sql = "DELETE FROM tblPlayer WHERE id=" . $player->getId();

        mysqli_query($this->conn, $sql);
    }

    public function getAllPurchases()
    {
        $sql = "SELECT * FROM tblPurchase";

        $resultset = mysqli_query($this->conn, $sql);

        $purchases = array();
        while ($row = $resultset->fetch_assoc()) {
            $purchases[] = new Purchase(
                $row['id'],
                $row['perkId'],
                $row['quantity'],
                $row['buyerId'],
                $row['datePurchased']
            );
        }

        return $purchases;
    }

    public function getPurchaseById(int $id)
    {
        $sql = "SELECT * FROM tblPurchase WHERE id=" . $id;

        $resultset = mysqli_query($this->conn, $sql);

        $row = $resultset->fetch_assoc();

        if (!$row)
            return;

        return new Purchase(
            $row['id'],
            $row['perkId'],
            $row['quantity'],
            $row['buyerId'],
            $row['datePurchased']
        );
    }

    public function addPurchase(Perk $perk, int $quantity, Player $buyer)
    {
        $sql = "INSERT INTO tblPurchase (perkId, quantity, buyerId) VALUES (" . $perk->getId() . ", " . $quantity . ", " . $buyer->getId() . ")";

        mysqli_query($this->conn, $sql);
    }

    public function getAllShops()
    {
        $sql = "SELECT * FROM tblShop";

        $resultset = mysqli_query($this->conn, $sql);

        $shops = array();
        while ($row = $resultset->fetch_assoc()) {
            $shops[] = new Shop(
                $row['id'],
                $row['name'],
                $row['description'],
                $row['dateCreated']
            );
        }

        return $shops;
    }

    public function getShopById(int $id)
    {
        $sql = "SELECT * FROM tblShop WHERE id=" . $id;

        $resultset = mysqli_query($this->conn, $sql);

        $row = $resultset->fetch_assoc();

        if (!$row)
            return;

        return new Shop(
            $row['id'],
            $row['name'],
            $row['description'],
            $row['dateCreated']
        );
    }

    public function getAllDevelopers()
    {
        $sql = "SELECT * FROM tblDeveloper";

        $resultset = mysqli_query($this->conn, $sql);

        $developers = array();
        while ($row = $resultset->fetch_assoc()) {
            $developers[] = new Developer(
                $row['id'],
                $row['level'],
                $row['dateJoined']
            );
        }

        return $developers;
    }

    public function getDeveloperById(int $id)
    {
        $sql = "SELECT * FROM tblDeveloper WHERE id=" . $id;

        $resultset = mysqli_query($this->conn, $sql);

        $row = $resultset->fetch_assoc();

        if (!$row)
            return;

        return new Developer(
            $row['id'],
            $row['level'],
            $row['dateJoined']
        );
    }

    public function addDeveloper(Player $player, int $level)
    {
        $sql = "INSERT INTO tblDeveloper (level, dateJoined) VALUES (" . $level . ", " . $player->getId() . ")";

        mysqli_query($this->conn, $sql);
    }

    public function updateDeveloper(Developer $developer)
    {
        $sql = "UPDATE tblDeveloper SET level=" . $developer->getLevel() . " WHERE id=" . $developer->getId();

        mysqli_query($this->conn, $sql);
    }

    public function deleteDeveloper(Developer $developer)
    {
        $sql = "DELETE FROM tblDeveloper WHERE id=?" . $developer->getId();

        mysqli_query($this->conn, $sql);
    }

    public function getAllModerators()
    {
        $sql = "SELECT * FROM tblModerator";

        $resultset = mysqli_query($this->conn, $sql);

        $moderators = array();
        while ($row = $resultset->fetch_assoc()) {
            $moderators[] = new Moderator(
                $row['id'],
                $row['level'],
                $row['dateJoined']
            );
        }

        return $moderators;
    }

    public function getModeratorById(int $id)
    {
        $sql = "SELECT * FROM tblModerator WHERE id=" . $id;

        $resultset = mysqli_query($this->conn, $sql);

        $row = $resultset->fetch_assoc();

        if (!$row)
            return;

        return new Moderator(
            $row['id'],
            $row['level'],
            $row['dateJoined']
        );
    }

    public function addModerator(Player $player, int $level)
    {
        $sql = "INSERT INTO tblModerator (level, dateJoined) VALUES (" . $level . ", " . $player->getId() . ")";

        mysqli_query($this->conn, $sql);
    }

    public function updateModerator(Moderator $moderator)
    {
        $sql = "UPDATE tblModerator SET level=" . $moderator->getLevel() . " WHERE id=" . $moderator->getId();

        mysqli_query($this->conn, $sql);
    }

    public function deleteModerator(Moderator $moderator)
    {
        $sql = "DELETE FROM tblModerator WHERE id=?" . $moderator->getId();

        mysqli_query($this->conn, $sql);
    }

    public function getAllPerks()
    {
        $sql = "SELECT * FROM tblPerk";

        $resultset = mysqli_query($this->conn, $sql);

        $perks = array();
        while ($row = $resultset->fetch_assoc()) {
            $perks[] = new Perk(
                $row['id'],
                $row['name'],
                $row['description'],
                $row['expMultiplier'],
                $row['cashMultiplier'],
                $row['devId'],
                $row['dateCreated']
            );
        }

        return $perks;
    }

    public function getPerkById(int $id)
    {
        $sql = "SELECT * FROM tblPerk WHERE id=" . $id;
        $resultset = mysqli_query($this->conn, $sql);

        $row = $resultset->fetch_assoc();

        if (!$row)
            return null;

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

    public function getPerkByName($perkName)
    {
        $sql = "SELECT * FROM tblPerk WHERE name=" . $perkName;
        $resultset = mysqli_query($this->conn, $sql);

        $row = $resultset->fetch_assoc();

        if (!$row)
            return null;

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

    public function addPerk(string $name, string $description, float $expMultiplier, float $cashMultiplier, int $devId, string $dateCreated)
    {
        $sql = "INSERT INTO tblPerk (name, description, expMultiplier, cashMultiplier, devId, dateCreated) VALUES (" . $name . ", " . $description . ", " . $expMultiplier . ", " . $cashMultiplier . ", " . $devId . ", " . $dateCreated . ")";

        mysqli_query($this->conn, $sql);
    }

    public function updatePerk(Perk $perk)
    {
        $sql = "UPDATE tblPerk SET name=" . $perk->getName() . ", description=" . $perk->getDescription() . ", expMultiplier=" . $perk->getExpMultiplier() . ", cashMultiplier=" . $perk->getCashMultiplier() . ", devId=" . $perk->getDevId() . "WHERE id=" . $perk->getId();

        mysqli_query($this->conn, $sql);
    }

    public function deletePerk(Perk $perk)
    {
        $sql = "DELETE FROM tblPerk WHERE id=" . $perk->getId();

        mysqli_query($this->conn, $sql);
    }

    public function getAllBanks()
    {
        $sql = "SELECT * FROM tblBank";

        $resultset = mysqli_query($this->conn, $sql);

        $banks = array();
        while ($row = $resultset->fetch_assoc()) {
            $banks[] = new Bank(
                $row['id'],
                $row['balance']
            );
        }

        return $banks;
    }

    public function getBankById(int $id)
    {
        $sql = "SELECT * FROM tblBank WHERE id=" . $id;

        $resultset = mysqli_query($this->conn, $sql);

        $row = $resultset->fetch_assoc();

        if (!$row)
            return;

        return new Bank(
            $row['id'],
            $row['balance']
        );
    }

    public function addBank()
    {
        $sql = "SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA=dbMonaHeist AND TABLE_NAME=tblPlayer";
        $resultset = mysqli_query($this->conn, $sql);

        $row = $resultset->fetch_assoc();

        $bankId = $row['AUTO_INCREMENT'];

        $sql = "INSERT INTO tblBank VALUES (" . $bankId . ", 0)";
        mysqli_query($this->conn, $sql);

        return $bankId;
    }

    public function updateBank(Bank $bank)
    {
        $sql = "UPDATE tblBank SET balance=" . $bank->getBalance() . " WHERE id=" . $bank->getId();

        mysqli_query($this->conn, $sql);
    }

    public function deleteBank(Bank $bank)
    {
        $sql = "DELETE FROM tblBank WHERE id=?" . $bank->getId();

        mysqli_query($this->conn, $sql);
    }

    public function getAllPlayerPerks()
    {
        $sql = "SELECT * FROM tblPlayerPerk";

        $resultset = mysqli_query($this->conn, $sql);

        $playerPerks = array();
        while ($row = $resultset->fetch_assoc()) {
            $playerPerks[] = new PlayerPerk(
                $row['id'],
                $row['playerId'],
                $row['perkId'],
                $row['quantity']
            );
        }

        return $playerPerks;
    }

    public function getPlayerPerkById(int $id)
    {
        $sql = "SELECT * FROM tblPlayerPerk WHERE id=" . $id;

        $resultset = mysqli_query($this->conn, $sql);

        $row = $resultset->fetch_assoc();

        if (!$row)
            return;

        return new PlayerPerk(
            $row['id'],
            $row['playerId'],
            $row['perkId'],
            $row['quantity']
        );
    }

    public function addPlayerPerk(int $playerId, int $perkId, int $quantity)
    {
        $sql = "INSERT INTO tblPlayerPerk (playerId, perkId, quantity) VALUES (" . $playerId . ", " . $perkId . ", " . $quantity . ")";

        mysqli_query($this->conn, $sql);
    }

    public function updatePlayerPerk(PlayerPerk $playerPerk)
    {
        $sql = "UPDATE tblPlayerPerk SET quantity=" . $playerPerk->getQuantity() . " WHERE id=" . $playerPerk->getId();

        mysqli_query($this->conn, $sql);
    }

    public function deletePlayerPerk(PlayerPerk $playerPerk)
    {
        $sql = "DELETE FROM tblPlayerPerk WHERE id =" . $playerPerk->getId();

        mysqli_query($this->conn, $sql);
    }
}
?>