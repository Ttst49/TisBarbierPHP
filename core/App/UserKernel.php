<?php

namespace App;

class UserKernel
{

    public static function run(){

        Session::start();


        $type = "user";
        $action = "register";



        if(!empty($_GET['type'])){ $type = $_GET['type']; };
        if(!empty($_GET['action'])){ $action = $_GET['action']; };

        $type = ucfirst($type);
        $controllerName = "\Controllers\\".$type."Controller";


        $controller = new $controllerName();

        $controller->$action();


    }

}