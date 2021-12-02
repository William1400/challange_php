<?php

class CompanyModel {

    private $id;
    private $name;
    private $country;
    private $VATNumber;
    private $typeId;

    function __construct($id, $name, $country, $VATNumber, $typeId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->country = $country;
        $this->VATNumber = $VATNumber;
        $this->typeId = $typeId;
    }

    public function getId() {

        return $this->id;
    }

    public function getName() {

        return $this->name;
    }

    public function getCountry() {

        return $this->country;
    }

    public function getVATNumber() {

        return $this->VATNumber;
    }

    public function getTypeId() {

        return $this->typeId;
    }

    
}