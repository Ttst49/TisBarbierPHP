<?php

namespace Controllers;


use Attributes\UsesEntity;

#[UsesEntity(value: false)]
class AdminController extends AbstractController
{

    public function index(){
        return $this->render("barber/connect",["pageTitle"=>"connexion Administrateur"]);
    }


    public function prestation(){
        return $this->render("admin/prestations",["pageTitle"=>"Prestations admin","css"=>"prestations"]);
    }

    public function realisation(){
        return $this->render("admin/realisations",["pageTitle"=>"Realisations admin","css"=>"realisations"]);
    }

}