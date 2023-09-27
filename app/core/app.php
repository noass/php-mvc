<?php

Class App {

    public function __construct(){
        //$url = $this->splitURL();

        print_r($this->splitURL());
        
    }

    private function splitURL(){
            return explode("/", $_GET['url']);
    }

}
