<?php

namespace Controllers;


use App\Session;
use Attributes\DefaultEntity;
use Entity\User;

#[DefaultEntity(entityName: User::class)]
class UserController extends AbstractController
{


    public function register(){
        $username= null;
        $password= null;

        if (!empty($_POST["username"])){
            $username= htmlspecialchars($_POST["username"]);
        }

        if (!empty($_POST["password"])){
            $password= htmlspecialchars($_POST["password"]);
        }

        if ($username && $password){
            $user = new User();
            $user->setUsername($username);
            $user->setPassword($password);

            $this->repository->insert($user);

            return $this->redirect([
                "type"=>"admin",
                "action"=>"accueil"
            ]);
        }


        return $this->render("barber/accueil",["pageTitle"=>"Accueil"]);

    }

    public function signIn(){

        $username =  null;
        $password = null;

        if (!empty($_POST["username"])){
            $username = htmlspecialchars($_POST["username"]);
        }

        if (!empty($_POST["password"])){
            $password = htmlspecialchars($_POST["password"]);
        }

        if ($username && $password){

            $user = $this->repository->findByUsername($username);

            if (!$user){
                $this->redirect([
                    "type"=>"barber",
                    "action"=>"connect",
                    "info"=>"Identifiant incorrect"
                ]);
            }

            if ($user->passwordMatches($password)){
                $user->logIn();

                return $this->redirect([
                   "type"=>"admin",
                   "action"=>"accueil",
                    "info"=>"Bienvenue Baptiste!"
                ]);
            }

            return $this->redirect([
                "type"=>"barber",
                "action"=>"connect",
                "info"=>"erreur mot de passe"
            ]);

        }

        return $this->render("barber/connect", [
            "pageTitle"=>"Connexion Administrateur"
        ]);

    }

    public function signOut(){

        $user = Session::getUser();

        if ($user){
            $user->logOut();
        }
        return $this->redirect([
            "type"=>"barber",
            "action"=>"accueil"
        ]);
    }

}