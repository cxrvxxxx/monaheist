<?php
class Bank
{
    private $id;
    private $balance;

    public function __construct($id, $balance)
    {
        $this->id = $id;
        $this->balance = balance;
    }

    public function getId()
    {
        return $id;
    }

    public function getBalance()
    {
        return $balance;
    }

    public function setBalance($amount)
    {
        if ($amount < 0)
            return;

        $this->balance = $amount;
    }
}
?>