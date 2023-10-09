<h1>List of all orders:</h1>

<?php
echo "<hr>";

foreach($data["orders"] as $orders){
    show($orders);
    echo "<p>Order ID: " . $orders['order_id'] . "</p>";
    echo "<p>Customer (first name & last name): " . $orders['customer'] . "</p>";
    echo "<p>Order date: " . $orders['order_date'] . "</p>";
    echo "<p>Status: " . $orders['status'] . "</p>";
    echo "<p>Comments: " . $orders['comments'] . "</p>";
    echo "<p>Shipped date: " . $orders['shipped_date'] . "</p>";
    echo "<p>Shipper ID: " . $orders['shipper_id'] . "</p>";

    echo "<hr>";
}

?>