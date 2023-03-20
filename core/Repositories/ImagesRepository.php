<?php

namespace Repositories;


use Attributes\TargetEntity;
use Entity\Images;

#[TargetEntity(entityName: Images::class)]
class ImagesRepository extends AbstractRepository
{

    public function update( Images $image){
        $request = $this->pdo->prepare("UPDATE {$this->tableName} SET image= :image WHERE id= :id");
        $request->execute([
            "id"=>$image->getId(),
            "image"=>$image->getImage()
        ]);
    }

}