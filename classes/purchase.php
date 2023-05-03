<?php
class Purchase {
    private int $id;
    private int $perkId;
    private int $quantity;
    private int $buyerId;
    private string $datePurchased;

    public function __construct(int $id, int $perkId, int $quantity, int $buyerId, string $datePurchased) {
        $this -> id = $id;
        $this -> perkId = $perkId;
        $this -> quantity = $quantity;
        $this -> buyerId = $buyerId;
        $this -> datePurchased = $datePurchased;
    }

    public function getId() { return $this -> id; }
    public function getPerkId() { return $this -> perkId; }
    public function getQuantity() { return $this -> quantity; }
    public function getBuyerid() { return $this -> buyerId; }
    public function getDatePurchased() { return $this -> datePurchased; }
}
?>