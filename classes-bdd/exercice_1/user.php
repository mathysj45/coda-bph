<?php
    class User
    {
        private ? int $id = NULL;

        public function __construct(private string $firstName, private string $lastName, private string $email)
        {

        }

        public function getFirstName()
        {
                return $this->firstName;
        }

        public function setFirstName($firstName)
        {
                $this->firstName = $firstName;
        }

        public function getLastName()
        {
                return $this->lastName;
        }

        public function setLastName($lastName)
        {
                $this->lastName = $lastName;
        }

        public function getEmail()
        {
                return $this->email;
        }

        public function setEmail($email)
        {
                $this->email = $email;
        }

        public function getId(): ?int
        {
            return $this->id;
        }

        public function setId(int $id): void
        {
            $this->id = $id;
        }
    }
?>