<?php

Class App {

    public function __construct(){
        //$url = $this->splitURL();

        show($this->splitURL());
        
    }

    private function splitURL(){
        echo(var_dump(trim($_GET["url"])));
        return explode("/", trim($_GET['url']));
    }

}
