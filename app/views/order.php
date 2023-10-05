<h1>Single order:</h1>

<?php
echo "<hr>";
    show($data["order"]);
    echo "<p>Order ID: " . $data['order_id'] . "</p>";
    echo "<p>Customer (first name & last name): " . $data['customer'] . "</p>";
    echo "<p>Order date: " . $data['order_date'] . "</p>";
    echo "<p>Status: " . $data['status'] . "</p>";
    echo "<p>Comments: " . $data['comments'] . "</p>";
    echo "<p>Shipped date: " . $data['shipped_date'] . "</p>";
    echo "<p>Shipper ID: " . $data['shipper_id'] . "</p>";

    echo "<hr>";
?>