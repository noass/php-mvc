<?php

Class App {

    public function __construct(){
        $url = $this->splitURL();

        print_r($url);
        
    }

    private function splitURL(){
            return explode("/", $_GET['url']);
    }

}
