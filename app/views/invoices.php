<h1>List of all invoices:</h1>

<?php
echo "<hr>";

while ($record = mysqli_fetch_assoc($data["results"])) {
    show($record);
    echo "<p>Invoice ID: " . $record['invoice_id'] . "</p>";
    echo "<p>Client ID: " . $record['client_id'] . "</p>";
    echo "<p>Invoice total: " . $record['invoice_total'] . "</p>";
    echo "<p>Payment total: " . $record['payment_total'] . "</p>";
    echo "<p>Invoice date: " . $record['invoice_date'] . "</p>";
    echo "<p>Due date: " . $record['due_date'] . "</p>";
    echo "<p>Payment date: " . $record['payment_date'] . "</p>";

    echo "<hr>";
}

?>