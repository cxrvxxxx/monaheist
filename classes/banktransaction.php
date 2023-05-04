<?php
class BankTransaction
{
    private int $id;
    private int $senderId;
    private int $receiverId;
    private int $bankId;
    private int $amount;
    private string $dateProcessed;

    public function __construct(int $id, int $senderId, int $receiverId, int $bankId, int $amount, string $dateProcessed)
    {
        $this->id = $id;
        $this->senderId = $senderId;
        $this->receiverId = $receiverId;
        $this->bankId = $bankId;
        $this->amount = $amount;
        $this->dateProcessed = $dateProcessed;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getSenderId()
    {
        return $this->senderId;
    }

    public function getReceiverid()
    {
        return $this->receiverId;
    }

    public function getBankId()
    {
        return $this->bankId;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function getDateProcessed()
    {
        return $this->dateProcessed;
    }
}
?>