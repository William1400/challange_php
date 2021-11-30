<?php
require 'connect.php';

class Invoice
{

    private $connexion;

    // Connexion to DB // 
    public function __construct(\PDO $pdo)
    {
        $this->connexion = $pdo;
    }

    // List of all invoices //
    public function getInvoices()
    {
        return $this->connexion->query("SELECT * FROM invoices")->fetchAll();
    }
}
