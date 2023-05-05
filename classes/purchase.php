<?php
class Purchase
{
    private int $id;
    private int $perkId;
    private int $shopId;
    private int $quantity;
    private int $buyerId;
    private string $datePurchased;

    public function __construct(int $id, int $perkId, int $shopId, int $quantity, int $buyerId, string $datePurchased)
    {
        $this->id = $id;
        $this->perkId = $perkId;
        $this->shopId = $shopId;
        $this->quantity = $quantity;
        $this->buyerId = $buyerId;
        $this->datePurchased = $datePurchased;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getPerkId()
    {
        return $this->perkId;
    }
    public function getShopId()
    {
        return $this->shopId;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }
    public function getBuyerid()
    {
        return $this->buyerId;
    }
    public function getDatePurchased()
    {
        return $this->datePurchased;
    }
}
?>