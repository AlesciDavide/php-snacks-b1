<?php 



class User{
    private $username;
    private $password;

    public function __construct($username, $password){
        $this->username = $username;
        $this->password = $password;
    }

    public function getUser(){
        return $this->username;
        return $this->password;
    }

    public function setUser($username, $password){
        $this->username = $username;
        $this->password = $password;
    }
}