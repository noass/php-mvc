<h1>List of all orders:</h1>

<?php
echo "<hr>";

while ($record = mysqli_fetch_assoc($data["results"])) {
    show($record);
    echo "<p>Order ID: " . $record['order_id'] . "</p>";
    echo "<p>Customer ID: " . $record['customer'] . "</p>";
    echo "<p>Order date: " . $record['order_date'] . "</p>";
    echo "<p>Status: " . $record['status'] . "</p>";
    echo "<p>Comments: " . $record['comments'] . "</p>";
    echo "<p>Shipped date: " . $record['shipped_date'] . "</p>";
    echo "<p>Shipper ID: " . $record['shipper_id'] . "</p>";

    echo "<hr>";
}

?>