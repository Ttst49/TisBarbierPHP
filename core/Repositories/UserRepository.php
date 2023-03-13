<?php

namespace Repositories;


use Attributes\TargetEntity;
use Entity\User;

#[TargetEntity(entityName: User::class)]
class UserRepository extends AbstractRepository
{

    public function findByUsername(){
        $query = $this->pdo->prepare("SELECT * FROM $this->tableName WHERE username =:username");

        $query->execute([
            "username"=>$username
        ]);

        $query->setFetchMode(\PDO::FETCH_CLASS,get_class($this->targetEntity));

        return $query->fetch();

    }

}