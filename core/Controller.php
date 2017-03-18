<?php

namespace Core;

class Controller {


    public function render($file){

        require VIEW.DIRECTORY_SEPARATOR.$file;

    }

}