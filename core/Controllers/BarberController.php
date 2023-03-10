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
        return $this->render("barber/contact",["pageTitle"=>"Contact","css"=>"contact"]);
    }

    public function mentions(){
        return $this->render("barber/mentionsLégales",["pageTitle"=>"Mention Légales"]);
    }
}