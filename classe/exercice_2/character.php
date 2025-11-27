<?php
    class Character {
    private string $firstName = "John";
    private string $lastName = "Doe";

    public function __construct(private int $id)
    {

    }

    public function getId() : int
    {
        return $this->id;
    }

    public function setId(string $id) : void
    {
        $this->id = $id;
    }

    public function getFirstName() : string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName) : void
    {
        $this->firstName = $firstName;
    }

    public function getLastName() : string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName) : void
    {
        $this->lastName = $lastName;
    }

    public function getFullName() : string
    {
        return "Je m'appelle {$this->firstName} {$this->lastName}.". "<br>";
    }
}
?>