<?php
    class Weapon
    {
        public function __construct(private string $name, private int $damage)
        {

        }

        public function getName() : string
        {
            return $this->name;
        }

        public function setName(string $name) : void
        {
            $this->name = $name;
        }

        public function getDamage() : int
        {
            return $this->damage;
        }

        public function setDamage(string $damage) : void
        {
            $this->damage = $damage;
        }

        public function strike() : string
        {
            return "Mais aïeuh! <br>";
        }
    }
?>