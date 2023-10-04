<?php

Class Invoices extends Controller{

    function index(){
        echo "Invoices controller, index method";
        $model = $this->loadModel("invoices_model");

        $db = new Database();
        $db->connect();

        $result = $db->read("SELECT * FROM invoices;");

        $this->view("invoices", ["results" => $result]);
    }

}