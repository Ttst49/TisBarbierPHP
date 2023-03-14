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
        $message = null;


        if (!empty($_POST["nom"])&& !empty($_POST["mail"])){
            $nom = $_POST["nom"];
            $mail = $_POST["mail"];
        }

        if (!empty($_POST["nom"]) && (!empty($_POST["mail"])) && (!empty($_POST["message"]))){



            file_get_contents("https://formsubmit.co/thibautstachnick@gmail.com");


            return $this->render("barber/accueil",["pageTitle"=>"coucou c'est moi"]);
        }


        return $this->render("barber/contact",["pageTitle"=>"Contact","css"=>"contact","nom"=>$nom,"mail"=>$mail]);
    }


    public function mentions(){
        return $this->render("barber/mentionsLégales",["pageTitle"=>"Mention Légales"]);
    }

    public function connect(){
        return $this->render("barber/connect",["pageTitle"=>"Connexion Admin"]);
    }

}
