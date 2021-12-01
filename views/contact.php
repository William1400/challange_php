<?php

include '../models/connect.php';
include '../models/contact.php';

$contact = new Contact($pdo);
$list = $contact->getAllInvoices();

echo "<table border='1'>

<tr>

<th>ID</th>

<th>Date</th>

<th>Number</th>

</tr>";

foreach ($list as $test) {
    
    echo "<tr>";
    echo "<td>" . $test['name'] . "</td>";
    echo "<td>" . $test['firstname'] . '</a>' . "</td>";
   
    echo "</tr>";
}
