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

        $id=null;
        $image= null;

        if (!empty($_GET["id"]) && ctype_digit($_GET["id"])){
            $id= $_GET["id"];
        }

        if ($id){


            $accueil = $this->repository->findById($id);

            if (!$accueil){
                return $this->redirect();
            }

            if (!empty($_GET["imageUpdate"])){
                $image = $_GET["imageUpdate"];
            }


            }
            if (!empty($_POST["idUpdate"])){
                $id = $_POST["idUpdate"];
            }

            if ($id && $image){

                echo $id;
                echo $image;

                $image = new File("image");
                if ($image->isImage()){
                    $image->upload();
                }


                $accueil = $this->repository->findById($id);

                $accueil->setImage($image->getName());

                $this->repository->update($accueil);

                return $this->redirect([
                    "type"=>"admin",
                    "action"=>"accueil"
                ]);

        }
        return $this->render("accueil/update",["accueil"=>$accueil,"pageTitle"=>"update Page"]);

    }

}