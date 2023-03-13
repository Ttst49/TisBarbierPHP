<?php

namespace Controllers;

use Attributes\UsesEntity;

#[UsesEntity(value: false)]
class BarberController extends AbstractController
{

    public function index()
    {

        return $this->render("barber/accueil", ["pageTitle"=>"Accueil"]);
    }

    public function realisation()
    {

        return $this->render("barber/realisations", ["pageTitle"=>"Réalisations","css"=>"realisations"]);
    }

    public function prestation(){

        return $this->render("barber/prestations",["pageTitle"=>"Préstations","css"=>"prestations"]);
    }

    public function contact(){

        $nom = null;
        $mail = null;


        if (!empty($_POST["nom"])&& !empty($_POST["mail"])){
            $nom = $_POST["nom"];
            $mail = $_POST["mail"];
        }


        return $this->render("barber/contact",["pageTitle"=>"Contact","css"=>"contact","nom"=>$nom,"mail"=>$mail]);
    }

    public function mentions(){
        return $this->render("barber/mentionsLégales",["pageTitle"=>"Mention Légales"]);
    }

    public function connect(){
        return $this->render("barber/connect",["pageTitle"=>"Connexion Admin"]);
    }

    /**
     *
     * création d'une méthode mail?
     * */
}