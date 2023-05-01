<?php
class Moderator {
    private $id;
    private $level;
    private $dateJoined;

    public function __construct($id, $level, $dateJoined) {
        $this -> id = $id;
        $this -> level = $level;
        $this -> dateJoined = $dateJoined;
    }

    public function getId() { return $id; }
    public function getLevel() { return $level; }
    public function getDateJoined() { return $dateJoined; }

    public function setLevel($level) {
        if ($level < 1) return;

        $this -> level = $level;
    }
}
?>