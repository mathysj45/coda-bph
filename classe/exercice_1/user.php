<?php
    class User
{
    public function __construct(private int $id, private string $username, private string $password)
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

    public function getUsername() : string
    {
        return $this->username;
    }

    public function setUsername(string $username) : void
    {
        $this->username = $username;
    }

    public function getPassword() : string
    {
        return $this->password;
    }

    public function setStreet(string $password) : void
    {
        $this->password = $password;
    }
}
?>