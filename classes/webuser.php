<?php
class WebUser
{
    private int $id;
    private string $firstname;
    private string $lastname;
    private string $username;
    private string $pasword;
    private string $birthdate;
    private string $gender;
    private int $playerId;
    private string $dateCreated;

    public function __construct()
    {

    }

    public function getId()
    {
        return $this->id;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function setBalance(int $amount)
    {
        if ($amount < 0)
            return;

        $this->balance = $amount;
    }
}
?>