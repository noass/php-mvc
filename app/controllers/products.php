<?php

Class Products extends Controller{

    function index(){
        $this->view("products");
        $this->loadModel("products_model");
    }

}