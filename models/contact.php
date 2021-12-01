<?php
require 'connect.php';

class Contact
{

    private $connexion;

    // Connexion to DB // 
    public function __construct(\PDO $pdo)
    {
        $this->connexion = $pdo;
    }

    // List of all invoices //
    public function getAllInvoices()
    {
        return $this->connexion->query("SELECT * FROM peopoles, compagnies ORDER BY firstname ASC")->fetchAll();
    }
}