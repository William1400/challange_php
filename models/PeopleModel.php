<?php

class PeopleModel {

    private $id;
    private $firstName;
    private $lastName;
    private $email;
    private $phoneNumber;
    private $companyId;

    function __construct($id, $firstName, $lastName, $email, $phoneNumber, $companyId) {

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
}
