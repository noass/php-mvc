<?php

Class Orders extends Controller{

    function index(){
        echo "Orders controller, index method";
        $model = $this->loadModel("order_model");

        $db = new Database();
        $db->connect();

        $result = $db->read("SELECT o.order_id, CONCAT(c.first_name, ' ', c.last_name) AS customer, o.order_date, os.name AS status, o.comments, o.shipped_date, o.shipper_id FROM orders o LEFT JOIN order_statuses os ON o.status = os.order_status_id LEFT JOIN customers c ON o.customer_id = c.customer_id;");

        $this->view("orders", ["results" => $result]);
    }

}