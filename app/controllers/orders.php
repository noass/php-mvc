<?php

Class Orders extends Controller{

    function index(){
        echo "Orders controller, index method";
        $model = $this->loadModel("order_model");

        $db = new Database();
        $db->connect();
        $result = $db->read("SELECT * FROM orders;");

        while ($record = mysqli_fetch_assoc($result)) {
            show($record);
            echo "<p>" . $record['order_id'] . "</p>";
            echo "<p>" . $record['customer_id'] . "</p>";
            echo "<p>" . $record['order_date'] . "</p>";
            echo "<p>" . $record['status'] . "</p>";
        }

        $this->view("orders");
    }

}