<?php
class Shop {
    private $id;
    private $name;
    private $description;
    private $dateCreated;

    public function __construct($id, $name, $description, $dateCreated) {
        $this -> id = $id;
        $this -> name = $name;
        $this -> dascription = $description;
        $this -> dateCreated = $dateCreated;
    }

    public function getId() { return $id; }
    public function getName() { return $name; }
    public function getDescription() { return $description; }
    public function getDateCreated() { return $dateCreated; }

    public function setName($name) {
        $this -> name = $name;
    }

    public function setDescription($desc) {
        $this -> description = $desc;
    }
} 
?>