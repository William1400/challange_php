<?php

include '../models/connect.php';
include '../models/contact.php';

$contact = new Contact($pdo);
$list = $contact->getAllContact();

echo "<table border='1'>

<tr>
    <th>name</th>
    <th>firstname</th>
</tr>";

foreach ($list as $test) {
    
    echo "<tr>";
    echo "<td>" . $test['name'] . "</td>";
    echo "<td>" . $test['firstname'] . '</a>' . "</td>";
    echo "</tr>";
}
var_dump($contact);