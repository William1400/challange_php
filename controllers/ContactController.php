<?php 
include_once('../models/PeopleModel.php');
include_once('../models/InvoiceModel.php');
include_once('../views/ContactView.php');

class ContactController {

    private $pdo;

    function __construct($pdo) {

        $this->pdo = $pdo;
    } 

    public function renderContactView($data) {
       
        $id = $data['id'];
        $dbContact = $this->pdo->query("SELECT * FROM peoples WHERE id = {$id}")->fetch();
    
        $contact = new PeopleModel(

            $this->pdo,
            $dbContact['id'], 
            $dbContact['firstname'], 
            $dbContact['lastname'], 
            $dbContact['email'], 
            $dbContact['phone_number'], 
            $dbContact['company_id']
        );

        $contactView = new ContactView($contact);
        
        $contactView->render();

    }

}

