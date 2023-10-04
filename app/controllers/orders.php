<?php

Class Orders extends Controller{

    function index(){
        $this->view("orders");
        echo "Orders controller, index method";
        $model = $this->loadModel("order_model");

        echo "<hr>";

        $db = new Database();
        $db->connect();
        $result = $db->read("SELECT * FROM orders;");

        while ($record = mysqli_fetch_assoc($result)) {
            show($record);
            echo "<p>Order ID: " . $record['order_id'] . "</p>";
            echo "<p>Customer ID: " . $record['customer_id'] . "</p>";
            echo "<p>Order date: " . $record['order_date'] . "</p>";
            echo "<p>Status: " . $record['status'] . "</p>";
            echo "<p>Comments: " . $record['comments'] . "</p>";
            echo "<p>Shipped date: " . $record['shipped_date'] . "</p>";
            echo "<p>Shipper ID: " . $record['shipper_id'] . "</p>";

            echo "<hr>";
        }
    }

}