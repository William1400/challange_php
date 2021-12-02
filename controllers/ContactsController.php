<?php
include_once('../models/PeopleModel.php');
include_once('../views/ContactsView.php');

class ContactsController {

    private $pdo;

    function __construct($pdo) {

        $this->pdo = $pdo;
    }

    // Display contacts view in browser.
    public function renderContactsView($data) {

        $dbPeoples = $this->pdo->query('SELECT * FROM peoples ORDER BY firstname ASC')->fetchAll();
        $peoples = [];
        foreach($dbPeoples as $dbPeople) {
            
            $people = new PeopleModel(
                
                $this->pdo,
                $dbPeople['id'], 
                $dbPeople['firstname'], 
                $dbPeople['lastname'], 
                $dbPeople['email'], 
                $dbPeople['phone_number'], 
                $dbPeople['company_id']
            );
            
            $peoples[] = $people;
        }

        $contactsView = new ContactsView($peoples);
        
        $contactsView->render();
    }

}