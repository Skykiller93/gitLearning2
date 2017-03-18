<?php

namespace Core;

class Routeur {

    static private $routes ;
    
    static private function setRoute(){
        self::$routes = json_decode(file_get_contents("../config/route.json"),true);
    }

    static private function getRoute(){
        self::setRoute();
        if(! isset($_SERVER["PATH_INFO"])){
            $_SERVER["PATH_INFO"] = "/";
        }
        $route["path"] = $_SERVER["PATH_INFO"];
        $route["params"] = $_REQUEST;        
        foreach(self::$routes as $keyRoute => $itemRoute){
            if($itemRoute["path"] == $route["path"]){
                $itemRoute["params"] = $route["params"];
                return $itemRoute;
            }
        }
        self::Erreur404();
    }

    static public function callController(){
        $route = self::getRoute();
        require CTRL.DIRECTORY_SEPARATOR.$route["controller"].".php";

        $controller = "Controller\\".$route["controller"];
        $controller = new $controller();
        call_user_func_array(
            array(
                $controller,
                $route["action"]
            ),
            $route["params"]
        );
    }

    static private function Erreur404(){
        echo "<h1><b>PAGE NOT FOUND !</b></h1>";
    }

}