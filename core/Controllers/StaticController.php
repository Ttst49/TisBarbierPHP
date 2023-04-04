<?php

namespace Controllers;


use Attributes\DefaultEntity;
use Attributes\UsesEntity;

#[UsesEntity(value: false)]
class StaticController extends AbstractController
{

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



            /**$url = 'http://formsubmit.co/thibautstachnick@gmail.com';
            $data = array('nom' => $nom, 'mail' => $mail, "message"=>$message);

            $options = array(
            'http' => array(
            'headers'  => "Content-Type: application/x-www-form-urlencoded\r\n",
            'method'  => "POST",
            'content' => http_build_query($data)
            )
            );
            $context  = stream_context_create($options);
            $result = file_get_contents($url, false, $context);

            var_dump($result);
             *
             **/


            $formData= array(
                "nom"=>$nom,
                "mail"=>$mail,
                "message"=>$message
            );

            $str= http_build_query($formData);

            $curl= curl_init();
            curl_setopt($curl,CURLOPT_URL,"https://formsubmit.co/thibautstachnick@gmail.com");
            curl_setopt($curl,CURLOPT_POST,1);
            curl_setopt($curl,CURLOPT_POSTFIELDS,$str);
            curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
            curl_exec($curl);
            curl_close($curl);
            var_dump($curl);

        }


        return $this->render("barber/contact",["pageTitle"=>"TisBarbier | Prise de contact et prise de rendez-vous","css"=>"contact","nom"=>$nom,"mail"=>$mail]);
    }

    public function mentions(){
        return $this->render("barber/mentionsLégales",["pageTitle"=>"TisBarbier | Informations mentions Légales"]);
    }

    public function connect(){
        return $this->render("barber/connect",["pageTitle"=>"Connexion Admin"]);
    }


}