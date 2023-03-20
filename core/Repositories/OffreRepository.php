<?php

namespace Repositories;


use Attributes\TargetEntity;
use Entity\Offre;

#[TargetEntity(entityName: Offre::class)]
class OffreRepository extends AbstractRepository
{

    public function update( Offre $offre){
        $request = $this->pdo->prepare("UPDATE {$this->tableName} SET price= :price WHERE id= :id");
        $request->execute([
            "id"=>$offre->getId(),
            "price"=>$offre->getPrice()
        ]);
    }


}