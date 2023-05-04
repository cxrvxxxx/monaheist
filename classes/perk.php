<?php
class Perk
{
    private int $id;
    private string $name;
    private string $description;
    private float $expMultiplier;
    private float $cashMultiplier;
    private string $dateCreated;

    public function __construct(int $id, string $name, string $description, float $expMultiplier, float $cashMultiplier, string $dateCreated)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->expMultiplier = $expMultiplier;
        $this->cashMultiplier = $cashMultiplier;
        $this->dateCreated = $dateCreated;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getExpMultiplier()
    {
        return $this->expMultiplier;
    }
    public function getCashMultiplier()
    {
        return $this->cashMultiplier;
    }
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setDescription($desc)
    {
        $this->description = $desc;
    }

    public function setExpMultiplier($value)
    {
        $this->expMultiplier = $value;
    }

    public function setCashMultiplier($value)
    {
        $this->cashMultiplier = $value;
    }

}
?>