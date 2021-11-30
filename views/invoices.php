<?php

include '../models/connect.php';
include '../models/invoice.php';

$invoice = new Invoice($pdo);
$list = $invoice->getAllInvoices();

echo "<table border='1'>

<tr>

<th>ID</th>

<th>Date</th>

<th>Number</th>

</tr>";
foreach ($list as $test) {
    echo "<tr>";
    echo "<td>" . $test['id'] . "</td>";
    echo "<td>" . $test['date'] . '</a>' . "</td>";
    echo "<td>" . $test['number'] . "</td>";
    echo "</tr>";
}
