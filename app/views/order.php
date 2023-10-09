<h1>Single order (by order_id):</h1>

<?php
echo "<hr>";
$order = $data["order"];
    show($order);
    echo "<p>Order ID: " . $order['order_id'] . "</p>";
    echo "<p>Customer (first name & last name): " . $order['customer'] . "</p>";
    echo "<p>Order date: " . $order['order_date'] . "</p>";
    echo "<p>Status: " . $order['status'] . "</p>";
    echo "<p>Comments: " . $order['comments'] . "</p>";
    echo "<p>Shipped date: " . $order['shipped_date'] . "</p>";
    echo "<p>Shipper ID: " . $order['shipper_id'] . "</p>";

    echo "<hr>";
?>