<?php 

class ContactView {

    private $contact;

    function __construct($contact)
    {   
        $this->contact = $contact;
    }

    private function getLayout() {

        ob_start();
        include_once('../views/layout/mainLayout.php');
        return ob_get_clean();
    }

    private function getContent() {

        $content = '<h3>Contact</h3>';
        
        $content = $content . "

            <table class='table table-striped table-hover'>

                <tr>
                    <th>First name</th>
                    <th>{$this->contact->getFirstname()}</th>
                </tr>

                <tr>
                    <th>Last name</th>
                    <th>{$this->contact->getLastname()}</th>
                </tr>

                <tr>
                    <th>Email</th>
                    <th>{$this->contact->getEmail()}</th>
                </tr>

                <tr>
                    <th>Phone number</th>
                    <th>{$this->contact->getPhoneNumber()}</th>
                </tr>
                
                <tr>
                    <th>Company</th>
                    <th>{$this->contact->getCompanyName()}</th>
                </tr>

            </table>

            <h3>Invoices</h3>

            <table  class='table table-striped table-hover'>
               
        ";
        
        foreach ($this->contact->getInvoices() as $invoice) {

            $content = $content . "
                
                <tr>
                    <th>{$invoice->getId()}</th>
                    <th>{$invoice->getNumber()}</th>
                    <th>{$invoice->getDate()}</th>
                </tr>
            ";
        }

        $content = $content . '</table>';    
        
        return $content;
    }

    public function render() {

        echo str_replace('{{content}}', $this->getContent(), $this->getLayout());
    }

}