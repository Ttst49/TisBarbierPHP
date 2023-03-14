<?php

namespace Controllers;


use Attributes\UsesEntity;

#[UsesEntity(value: false)]
class AdminController extends AbstractController
{

    public function index(){
        return $this->render("barber/connect",["pageTitle"=>"connexion Administrateur"]);
    }

    public function accueil(){
        return $this->render("admin/Accueil",["pageTitle"=>"accueil admin"]);
    }

}