<?php

namespace Controllers;

use Attributes\DefaultEntity;
use Entity\Images;
use Entity\Offre;


#[DefaultEntity(entityName: Images::class)]
class AdvancedController extends AbstractController
{

    public function index()
    {

        return $this->render("barber/accueil",[
            "images"=>$this->repository->findAll(),
            "pageTitle"=> "TisBarbier | Barbier/coiffeur Oyonnax"
        ]);
    }

    public function realisation()
    {

        return $this->render("barber/realisations", ["images"=>$this->repository->findAll(),"pageTitle"=>"TisBarbier | Réalisations Barbier/coiffeur","css"=>"realisations"]);
    }

    public function prestation(){


        return $this->render("barber/prestations",["offres"=>$this->getRepository(entityName: Offre::class)->findAll(),"pageTitle"=>"TisBarbier | Prestations Barbier/coiffeur","css"=>"prestations"]);
    }



}
