<?php

namespace Repositories;


use Attributes\TargetEntity;
use Entity\Accueil;

#[TargetEntity(entityName: Accueil::class)]
class AccueilRepository extends AbstractRepository
{

    public function update( Accueil $accueil){
        $request = $this->pdo->prepare("UPDATE {$this->tableName} SET image= :image WHERE id= :id");
        $request->execute([
            "id"=>$accueil->getId(),
            "image"=>$accueil->getImage()
        ]);
    }

}