<?php
class ShopListing
{
    private int $id;
    private int $perkId;
    private int $shopId;
    private int $stock;
    private int $price;
    private string $dateAdded;

    public function __construct(int $id, int $perkId, int $shopId, int $stock, int $price, string $dateAdded)
    {
        $this->id = $id;
        $this->perkId = $perkId;
        $this->shopId = $shopId;
        $this->stock = $stock;
        $this->price = $price;
        $this->dateAdded = $dateAdded;
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
    public function getStock()
    {
        return $this->stock;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    public function setPerkId(int $perkId)
    {
        $this->perkId = $perkId;
    }

    public function setShopId(int $shopId)
    {
        $this->shopId = $shopId;
    }

    public function setStock(int $stock)
    {
        if ($stock < 0)
            return;

        $this->stock = $stock;
    }

    public function setPrice(int $price)
    {
        if ($price < 0)
            return;

        $this->price = $price;
    }
}

?>