<?php
    class Member extends AbsctarctUser
    {
        private array $favorites = [];
        
        public function __construct(private string $biography, string $username, string $password, string $role)
        {
            parent::__construct($username, $password, "MEMBER");
        }

        public function getBiography()
        {
                return $this->biography;
        }

        public function setBiography($biography)
        {
                $this->biography = $biography;
        }

        public function getFavorites()
        {
                return $this->favorites;
        }

        public function setFavorites($favorites)
        {
                $this->favorites = $favorites;
        }
    }
?>