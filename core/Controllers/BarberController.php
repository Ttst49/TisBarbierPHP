<?php

namespace Controllers;

use Attributes\UsesEntity;
/**
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;
**/

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


        if (!empty($_POST["nom"]) && !empty($_POST["mail"])){

            return $this->render("barber/contact",["pageTitle"=>"Contact","css"=>"contact","nom"=>$nom,"mail"=>$mail]);
        }


        if (!empty($_POST["nom"])){
            $nom = $_POST["nom"];

        }

        if (!empty($_POST["mail"])){
            $mail = $_POST["mail"];
        }

        if (!empty($_POST["message"])){
            $message = $_POST["message"];
        }

        if (!empty($_POST["nom"]) && (!empty($_POST["mail"])) && (!empty($_POST["message"]))){

            $transport = (new Swift_SmtpTransport("smtp.example.org",25))
                ->setUsername("heu")
                ->setPassword("jsp");

            $mailer = new Swift_Mailer($transport);

            $message = (new Swift_Message("Prise contact TisBarbier"))
                ->setFrom([$mail=>$nom])
                ->setTo(["thibautstachnick@gmail.com"=>"thithi stach"])
                ->setBody($message);

            $result = $mailer->send($message);

        }


    }


    public function mentions(){
        return $this->render("barber/mentionsLégales",["pageTitle"=>"Mention Légales"]);
    }

    public function connect(){
        return $this->render("barber/connect",["pageTitle"=>"Connexion Admin"]);
    }

}
