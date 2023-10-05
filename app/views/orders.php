<h1>List of all orders:</h1>

<?php
echo "<hr>";

// while ($record = mysqli_fetch_assoc($data["orders"])) {
//     show($record);
//     echo "<p>Order ID: " . $record['order_id'] . "</p>";
//     echo "<p>Customer (first name & last name): " . $record['customer'] . "</p>";
//     echo "<p>Order date: " . $record['order_date'] . "</p>";
//     echo "<p>Status: " . $record['status'] . "</p>";
//     echo "<p>Comments: " . $record['comments'] . "</p>";
//     echo "<p>Shipped date: " . $record['shipped_date'] . "</p>";
//     echo "<p>Shipper ID: " . $record['shipper_id'] . "</p>";

//     echo "<hr>";
// }

foreach($data["orders"] as $order){
    show($order);
    echo "<p>Order ID: " . $order['order_id'] . "</p>";
    echo "<p>Customer (first name & last name): " . $order['customer'] . "</p>";
    echo "<p>Order date: " . $order['order_date'] . "</p>";
    echo "<p>Status: " . $order['status'] . "</p>";
    echo "<p>Comments: " . $order['comments'] . "</p>";
    echo "<p>Shipped date: " . $order['shipped_date'] . "</p>";
    echo "<p>Shipper ID: " . $order['shipper_id'] . "</p>";

    echo "<hr>";
}

?>