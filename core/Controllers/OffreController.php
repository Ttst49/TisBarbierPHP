<?php

namespace Controllers;

use App\File;
use Attributes\DefaultEntity;
use Entity\Offre;

#[DefaultEntity(entityName: Offre::class)]
class OffreController extends AbstractController
{

    public function index(){

        return $this->render("accueil/index",[
            "accueils"=>null,
            "offres"=>$this->repository->findAll(),
            "pageTitle"=>"modifications administrateur"
        ]);
    }

    public function update(){



            $request = $this->get("form",["id"=>"number"]);

            if ($request){
                return $this->render("accueil/update",["accueil"=>null,"offre"=>$this->repository->findById($_GET["id"]),"pageTitle"=>"update page"]);
            }


            $request = $this->post("form",["idUpdate"=>"number","price"=>"number"]);


            if ($request){

                $offre = $this->repository->findById($request["idUpdate"]);

                if (!$offre){
                    return $this->render("accueil/index",["pageTitle"=>"accueil Admin"]);
                }


                if ($request["idUpdate"]){

                    if ($request["price"])

                        $offre->setPrice($request["price"]);

                        $this->repository->update($offre);

                    return $this->redirect([
                        "type"=>"offre",
                        "action"=>"index",
                        "accueils"=>null,
                        "offres"=>$this->repository->findAll()
                    ]);

                    }


                }
                return $this->redirect(["type=accueil", "action"=>"index"]);
            }


}