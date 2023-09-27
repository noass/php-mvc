<?php

Class App {

    private $controller = "home";
    private $method = "index";
    private $params = [];

    
    
    public function __construct(){
        $url = $this->splitURL();

        $urlToLower = strtolower($url[0]);
        //show($url);

        if(file_exists("../app/controllers/" . $urlToLower . ".php")){
            $this->controller = $urlToLower;
            //show($url);
            unset($url[0]);
            //show($url);
        }else{
            echo "{$url[0]} doesn't exist";
        }

        require "../app/controllers/" . $this->controller . ".php";
        
    }

    private function splitURL(){
        //echo(var_dump(trim($_GET["url"])));
        return explode("/", trim($_GET['url']));
    }

}
