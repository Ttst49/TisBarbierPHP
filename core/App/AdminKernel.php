<?php

namespace App;

class AdminKernel
{
    /**
     * Main class, It runs at the opening of the website and define the landing page
     */
    public static function run(){

        $type = "admin";
        $action = "connect";



        if(!empty($_GET['type'])){ $type = $_GET['type']; };
        if(!empty($_GET['action'])){ $action = $_GET['action']; };

        $type = ucfirst($type);
        $controllerName = "\Controllers\\".$type."Controller";


        $controller = new $controllerName();

        $controller->$action();




    }

}