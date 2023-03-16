<?php

namespace Controllers;


use App\File;
use Attributes\DefaultEntity;
use Entity\Accueil;

#[DefaultEntity(entityName: Accueil::class)]
class AccueilController extends AbstractController
{


    public function index(){

        return $this->render("accueil/index",[
            "accueils"=>$this->repository->findAll(),
            "pageTitle"=> "modifications administrateur"
        ]);
    }


    public function update(){


        $request = $this->get("form",["id"=>"number"]);

        if ($request){
            return $this->render("accueil/update",["accueil"=>$this->repository->findById($_GET["id"]),"pageTitle"=>"update page"]);
        }


        $request = $this->post("form",["idUpdate"=>"number"]);


        if ($request){

            $accueil = $this->repository->findById($request["idUpdate"]);

            if (!$accueil){
                return $this->render("accueil/index",["pageTitle"=>"accueil Admin"]);
            }


            if ($request["idUpdate"]){


                $image = new File("image");
                var_dump($image);
                if ($image->isImage()){
                    $image->upload();
                    $accueil->setImage($image->getName());
                }else{
                    return $this->render("accueil/update",["accueil"=>$accueil,"pageTitle"=>"update page"]);
                }


                $this->repository->update($accueil);

                return $this->redirect([
                    "type"=>"accueil",
                    "action"=>"index"
                ]);

            }
        }

        return $this->redirect(["type=accueil", "action"=>"accueil"]);
    }

}