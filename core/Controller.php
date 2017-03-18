<?php

namespace Core;

class Controller {

    protected $_db;

    public function render($file){

        require VIEW.DIRECTORY_SEPARATOR.$file;

    }

    public function __construct(){
        $dbhost = "localhost";
        $dbname = "rest";
        $dbuser = "root";
        $dbpswd = "";
        try {
            $this->_db = new \PDO("mysql:host=".$dbhost.";dbname=".$dbname,$dbuser,$dbpswd);
        } catch (\PDOException $e) {
            throw new \PDOException("Error  : " .$e->getMessage());
        }
    }

}