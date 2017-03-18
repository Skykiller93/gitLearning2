<?php 

namespace Controller;

use Core\Controller;

class Index extends Controller {

    public function defaultAction(){
        
        $this->render("formulaire.html");

    }

    public function enregistrer($nom,$prenom,$age){
        parent::__construct();
        $this->_db->exec("insert into person(nom,prenom,age) values('$nom','$prenom','$age');");
        header("Location: http://php.git.dev");
    }
    
}