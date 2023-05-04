<?php
class Player
{
    private int $id;
    private int $level;
    private int $experience;
    private int $cash;
    private int $bankId;
    private string $dateJoined;

    public function __construct(int $id, int $level, int $experience, int $cash, int $bankId, string $dateJoined)
    {
        $this->id = $id;
        $this->level = $level;
        $this->experience = $experience;
        $this->cash = $cash;
        $this->bankId = $bankId;
        $this->dateJoined = $dateJoined;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getLevel()
    {
        return $this->level;
    }
    public function getExperience()
    {
        return $this->experience;
    }
    public function getCash()
    {
        return $this->cash;
    }
    public function getBankId()
    {
        return $this->bankId;
    }
    public function getDateJoined()
    {
        return $this->dateJoined;
    }

    public function setLevel(int $level)
    {
        if ($level < 1)
            return;

        $this->level = $level;
    }

    public function setExperience(int $experience)
    {
        if ($experience < 0)
            return;

        $this->experience = $experience;
    }

    public function setCash(int $cash)
    {
        if ($cash < 0)
            return;

        $this->cash = $cash;
    }
}
?>