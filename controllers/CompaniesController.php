<?php

include_once('../models/CompanyModel.php');
include_once('../views/CompaniesView.php');

class CompaniesControler {

    private $pdo;

    function __construct($pdo) {

        $this->pdo = $pdo;
    }

    public function renderCompaniesView($data) {

        $dbCompanies = $this->pdo->query('SELECT * FROM companies')->fetchAll();
        $companies = [];
        foreach ($dbCompanies as $dbCompany) {
    
            $company = new CompanyModel(
    
                $dbCompany['id'],
                $dbCompany['name'],
                $dbCompany['country'],
                $dbCompany['VAT_number'],
                $dbCompany['type_id'],
            );
    
            $companies[] = $company;
        }
    
        $companiesView = new CompaniesView($companies);
        $companiesView->render();
    
    }



}
