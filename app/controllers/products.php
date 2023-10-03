<?php

Class Products extends Controller{

    function index(){
        $this->loadModel("products_model");
        $this->view("products");
    }

}