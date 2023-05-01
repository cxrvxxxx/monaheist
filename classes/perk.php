<?php
class Perk {
    private $id;
    private $name;
    private $description;
    private $expMultiplier;
    private $cashMultiplier;
    private $devId;
    private $dateCreated;

    public function __construct($id, $name, $description, $expMultiplier, $cashMultiplier, $devId, $dateCreated) {
        $this -> id = $id;
        $this -> name = $name;
        $this -> description = $description;
        $this -> expMultiplier = $expMultiplier;
        $this -> cashMultiplier = $cashMultiplier;
        $this -> devId = $devId;
        $this -> dateCreated = $dateCreated;
    }

    public function getId() { return $id; }
    public function getName() { return $name; }
    public function getDescription() { return $description; }
    public function getExpMultiplier() { return $expMultiplier; }
    public function getCashMultiplier() { return $cashMultiplier; }
    public function getDevId() { return $devId; }
    public function getDateCreated() { return $dateCreated; }

    public function setName($name) {
        $this -> name = $name;
    }

    public function setDescription($desc) {
        $this -> description = $desc;
    }

    public function setExpMultiplier($value) {
        $this -> expMultiplier = $value;
    }

    public function setCashMultiplier($value) {
        $this -> cashMultiplier = $value;
    }

}
?>