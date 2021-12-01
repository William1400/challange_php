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
    public function getAllInvoices()
    {
        return $this->connexion->query("SELECT * FROM invoices ORDER BY date DESC")->fetchAll();
    }

    /* public function getLastFiveInvoices() {
        return $this->connexion->query('SELECT ')
    } */

    /*   public function getInvoicesCompanyClients() {
        return $this->connexion->query("SELECT ")
    } */
}
