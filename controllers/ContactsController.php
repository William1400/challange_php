<?php
include_once('../models/PeopleModel.php');
include_once('../models/CompanyModel.php');
include_once('../views/ContactsView.php');

class ContactsController {

    private $pdo;

    function __construct($pdo) {

        $this->pdo = $pdo;
    }

    // Display contacts view in browser.
    function renderContactsView() {

        $dbPeoples = $this->pdo->query('SELECT * FROM peoples')->fetchAll();
        $peoples = [];
        foreach($dbPeoples as $dbPeople) {
            
            $people = new PeopleModel(
                
                $dbPeople['id'], 
                $dbPeople['firstname'], 
                $dbPeople['lastname'], 
                $dbPeople['email'], 
                $dbPeople['phone_number'], 
                $dbPeople['company_id']
            );
            
            $peoples[] = $people;
        }

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

        $contactsView = new ContactsView($peoples, $companies);
        
        $contactsView->render();

    }

}