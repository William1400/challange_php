<?php

class InvoiceModel {

    private $pdo;

    private $id;
    private $number;
    private $date;
    private $companyId;
    private $peopleId;
    

    function __construct($pdo, $id, $number, $date, $companyId, $peopleId) {

        $this->pdo = $pdo;

        $this->id = $id;
        $this->number = $number;
        $this->date = $date;
        $this->companyId = $companyId;
        $this->peopleId = $peopleId;
       
    }
    
    public function getId() {

        return $this->id;
    }

    public function getNumber() {

        return $this->number;
    }

    public function getDate() {

        return $this->date;
    }

    public function getCompanyId() {

        return $this->companyId;
    }

    public function getPeopleId() {

        return $this->peopleId;
    }
   
    public function getCompanyName() {

        $companyName = $this->pdo->query("SELECT name FROM companies WHERE id = {$this->companyId}")->fetch();
        return $companyName['name'];
    }
}
