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
        }

        require "../app/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;
        //$this->controller->index();

        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        //show($url);
        $this->params = array_values($url);
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    private function splitURL(){
        //echo(var_dump(trim($_GET["url"])));
        return explode("/", filter_var(trim($_GET['url'], "/"), FILTER_SANITIZE_URL));
    }

}
