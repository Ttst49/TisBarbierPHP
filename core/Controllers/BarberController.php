<?php

namespace Controllers;

use Attributes\DefaultEntity;
use Attributes\UsesEntity;
use Entity\Accueil;
use const http\Client\Curl\POSTREDIR_301;


#[DefaultEntity(entityName: Accueil::class)]
class BarberController extends AbstractController
{

    public function index()
    {

        return $this->render("barber/accueil",[
            "accueils"=>$this->repository->findAll(),
            "pageTitle"=> "Accueil"
        ]);
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

        if (!empty($_POST["message"])){
            $message = $_POST["message"];
        }

        if ($nom && $mail && $message){



            $url = 'https://formsubmit.co/thibautstachnick@gmail.com';
            $data = array('nom' => $nom, 'mail' => $mail, "message"=>$message);

            $options = array(
                'http' => array(
                    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method'  => 'POST',
                    'content' => http_build_query($data)
                )
            );
            $context  = stream_context_create($options);
            $result = file_get_contents($url, false, $context);

            var_dump($result);


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
