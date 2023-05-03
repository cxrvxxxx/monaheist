<?php
class Moderator {
    private int $id;
    private int $level;
    private string $dateJoined;

    public function __construct($id, $level, $dateJoined) {
        $this -> id = $id;
        $this -> level = $level;
        $this -> dateJoined = $dateJoined;
    }

    public function getId() { return $this -> id; }
    public function getLevel() { return $this -> level; }
    public function getDateJoined() { return $this -> dateJoined; }

    public function setLevel($level) {
        if ($level < 1) return;

        $this -> level = $level;
    }
}
?>