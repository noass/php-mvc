<?php

Class Home{

    function index(){
        //echo "home controller, index method/function";
        $this->view("home");
    }

    function view($view){
        if(file_exists("../app/views/" . $view . ".php")){
            include "../app/views/" . $view . ".php";
        }else{
            include "../app/views/404.php";
        }
    }
}