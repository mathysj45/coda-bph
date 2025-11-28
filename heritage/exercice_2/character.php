<?php
    class Character
    {
        public function __construct(protected string $name, protected int $life){

        }

        public function getName() : string
        {
            return $this->name;
        }

        public function setName(string $name) : void
        {
            $this->name = $name;
        }

        public function getLife() : int
        {
            return $this->life;
        }

        public function setLife(int $life) : void
        {
            $this->life = $life;
        }

        public function introduce() : string 
        {
    	    return "Bonjour je m'appelle {$this->name}";
        }
    }
?>