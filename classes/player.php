<?php
class Player {
    private $id;
    private $level;
    private $experience;
    private $cash;
    private $bankId;
    private $dateJoined;
    
    public function __construct($id, $level, $experience, $cash, $bankid, $dateJoined) {
        $this -> id = $id;
        $this -> level = $level;
        $this -> experience = $experience;
        $this -> cash = $cash;
        $this -> bankId = $bankId;
        $this -> dateJoined = $dateJoined;
    }

    public function getId() { return $id; }
    public function getLevel() { return $level; }
    public function getExperience() { return $experience; }
    public function getCash() { return $cash; }
    public function getBankId() { return $bankId; }
    public function getDateJoined() { return $dateJoined; }

    public function setLevel($level) {
        if ($level < 1) return;

        $this -> level = $level;
    }

    public function setExperience($experience) {
        if ($experience < 0) return;

        $this -> experience = $experience;
    }

    public function setCash($cash) {
        if ($cash < 0) return;

        $this -> cash = $cash;
    }
}
?>