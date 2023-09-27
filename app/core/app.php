<?php

Class App {

    public function __construct(){
        //$url = $this->splitURL();

        show($this->splitURL());
        
    }

    private function splitURL(){
        //var_dump($_GET);
        return explode("/", trim($_GET['url']));
    }

}
