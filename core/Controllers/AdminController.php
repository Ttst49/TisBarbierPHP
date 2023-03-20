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
        return $this->render("administrateur/prestations",["pageTitle"=>"Prestations administrateur","css"=>"prestations"]);
    }

    public function realisation(){
        return $this->render("administrateur/realisations",["pageTitle"=>"Realisations administrateur","css"=>"realisations"]);
    }

}