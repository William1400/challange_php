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
    public function getAllContact()
    {
        return $this->connexion->query('SELECT * FROM peopoles')->fetchAll();
       
    }
} 