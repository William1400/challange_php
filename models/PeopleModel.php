<?php

class PeopleModel {

    private $pdo;

    private $id;
    private $firstName;
    private $lastName;
    private $email;
    private $phoneNumber;
    private $companyId;

    function __construct($pdo, $id, $firstName, $lastName, $email, $phoneNumber, $companyId) {

        $this->pdo = $pdo;

        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->companyId = $companyId;
    }
    
    public function getId() {

        return $this->id;
    }

    public function getFirstName() {

        return $this->firstName;
    }

    public function getLastName() {

        return $this->lastName;
    }

    public function getEmail() {

        return $this->email;
    }

    public function getPhoneNumber() {

        return $this->phoneNumber;
    }
    
    public function getCompanyId() {

        return $this->companyId;
    }

    public function getCompanyName() {

        $dbcompanyName = $this->pdo->query("SELECT name FROM companies WHERE id = {$this->companyId}")->fetch();
        return $dbcompanyName['name'];
    }

    public function getInvoices() {

        $invoices = [];

        $dbInvoices =  $this->pdo->query("SELECT * FROM invoices WHERE people_id = {$this->id}")->fetchAll();

        foreach ($dbInvoices as $dbInvoice) {

            $invoice = new InvoiceModel(

                $this->pdo,

                $dbInvoice['id'],
                $dbInvoice['number'],
                $dbInvoice['date'],
                $dbInvoice['company_id'],
                $dbInvoice['people_id']
            );

            $invoices[] = $invoice;
        }

        return $invoices;
    }
}
