<?php

namespace App;

class Security implements UserInterface
{

    protected int $id;

    protected string $username;
    protected string $password;

    public function encryptPassword($clearPassword){

        return password_hash($clearPassword, PASSWORD_DEFAULT);
    }

    public function passwordMatches(string $clearPassword): bool{
        return password_verify($clearPassword, $this->password);
    }

    public function logIn(){
        Session::add("user",[
            'id'=>$this->id,
            "username"=>$this->username
        ]);
    }

    public function logOut(){
        Session::remove("user");
    }


    public function getId()
    {
        // TODO: Implement getId() method.
    }

    public function getPassword()
    {
        // TODO: Implement getPassword() method.
    }

    public function setPassword(string $password)
    {
        // TODO: Implement setPassword() method.
    }

    public function getUsername()
    {
        // TODO: Implement getUsername() method.
    }

    public function setUsername(string $username)
    {
        // TODO: Implement setUsername() method.
    }
}