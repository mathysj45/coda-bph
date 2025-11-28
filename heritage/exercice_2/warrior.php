<?php
    require_once "character.php";
    class Warrior extends Character
    {
        public function __construct(private int $energy, string $name, int $life)
        {
            parent::__construct($name, $life);
        }

        public function getEnergy() : int
        {
           return $this->energy;
        }

        public function setEnergy(int $energy) : void
        {
            $this->energy = $energy;
        }
    }
?>