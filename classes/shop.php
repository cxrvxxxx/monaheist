<?php
class Shop {
    private int $id;
    private string $name;
    private string $description;
    private string $dateCreated;

    public function __construct(int $id, string $name, string $description, string $dateCreated) {
        $this -> id = $id;
        $this -> name = $name;
        $this -> description = $description;
        $this -> dateCreated = $dateCreated;
    }

    public function getId() { return $this -> id; }
    public function getName() { return $this -> name; }
    public function getDescription() { return $this -> description; }
    public function getDateCreated() { return $this -> dateCreated; }

    public function setName($name) {
        $this -> name = $name;
    }

    public function setDescription($desc) {
        $this -> description = $desc;
    }
} 
?>