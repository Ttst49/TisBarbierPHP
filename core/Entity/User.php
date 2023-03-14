<?php

namespace Entity;


use App\Security;
use Attributes\Table;
use Attributes\TargetRepository;
use Repositories\UserRepository;

#[Table(name: "user")]
#[TargetRepository(repositoryName: UserRepository::class)]
class User extends Security
{

    protected int $id;
    protected string $username;
    protected string $password;

    public function getId(): int
    {
        return $this->id;
    }


    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $this->encryptPassword($password);
    }


}