<?php
class PlayerPerk
{
    private int $id;
    private int $playerId;
    private int $perkId;
    private int $quantity;

    public function __construct(int $id, int $playerId, int $perkId, int $quantity)
    {
        $this->id = $id;
        $this->playerId = $playerId;
        $this->perkId = $perkId;
        $this->quantity = $quantity;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getPlayerId()
    {
        return $this->playerId;
    }

    public function getPerkId()
    {
        return $this->perkId;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity)
    {
        if ($quantity < 0)
            return;

        $this->quantity = $quantity;
    }
}
?>