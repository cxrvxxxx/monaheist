<?php
class Bank
{
    private int $id;
    private int $balance;

    public function __construct(int $id, int $balance)
    {
        $this->id = $id;
        $this->balance = $balance;
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