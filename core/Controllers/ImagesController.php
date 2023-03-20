<?php

namespace Controllers;


use App\File;
use Attributes\DefaultEntity;
use Entity\Images;

#[DefaultEntity(entityName: Images::class)]
class ImagesController extends AbstractController
{


    public function index(){

        return $this->render("administrateur/index",[
            "images"=>$this->repository->findAll(),
            "offres"=>null,
            "pageTitle"=> "modifications administrateur"
        ]);
    }


    public function update(){


        $request = $this->get("form",["id"=>"number"]);

        if ($request){
            return $this->render("administrateur/update",["image"=>$this->repository->findById($_GET["id"]),"pageTitle"=>"update page"]);
        }


        $request = $this->post("form",["idUpdate"=>"number","ancienneImage"=>"text"]);


        if ($request){

            $page = $this->repository->findById($request["idUpdate"]);

            if (!$page){
                return $this->render("administrateur/index",["pageTitle"=>"administrateur Admin"]);
            }


            if ($request["idUpdate"]){


                $image = new File("image");
                if ($image->isImage()){
                    $image->upload($request["ancienneImage"]);
                    $page->setImage($image->getName());
                }else{
                    return $this->render("administrateur/update",["image"=>$page,"pageTitle"=>"update page"]);
                }


                $this->repository->update($page);

                return $this->redirect([
                    "type"=>"images",
                    "action"=>"index"
                ]);

            }
        }

        return $this->redirect(["type=images", "action"=>"index"]);
    }

}