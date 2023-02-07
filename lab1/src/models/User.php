<?php


class User {
    private $email;
    private $password;
    private $login;


    public function __construct(string $email, string $password, string $login) {
        $this->email = $email;
        $this->password = $password;
        $this->login = $login;

    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword():string
    {
        return $this->password;
    }


    public function getLogin(): string
    {
        return $this->login;
    }


    public function setLogin(string $login)
    {
        $this->login = $login;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }


    public function setPassword(string $password)
    {
        $this->password = $password;
    }


}