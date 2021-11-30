<?php

include '../models/connect.php';
include '../models/invoice.php';

$invoice = new Invoice($pdo);
$list = $invoice->getInvoices();

foreach ($list as $test) {
    print_r($test);
}
