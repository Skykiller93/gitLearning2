<?php
require_once "../core/Routeur.php";
require_once "../core/Controller.php";

define ("WWW",__DIR__);
define ("CTRL",dirname(__DIR__).DIRECTORY_SEPARATOR."controller");
define ("VIEW",dirname(__DIR__).DIRECTORY_SEPARATOR."view");

use Core\Routeur;

Routeur::callController();

?>