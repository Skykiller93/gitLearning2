<?php 

namespace Controller;

use Core\Controller;

class Index extends Controller {

    public function defaultAction(){
        
        $this->render("formulaire.html");

    }
    
}