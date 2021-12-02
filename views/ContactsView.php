<?php

class ContactsView {

    private $peoples;
    private $companies;

    function __construct($peoples, $companies)
    {   
        $this->peoples = $peoples;
        $this->companies = $companies;
    }

    private function getLayout() {

        ob_start();
        include_once('../views/layout/mainLayout.php');
        return ob_get_clean();
    }

    private function getContent() {

        $content = '<h3>Peoples</h3>';
        
        $content = $content . "<table class='table table-striped table-hover'>";
        
        foreach ($this->peoples as $people) {

            $content = $content . "
                <tr>
                    <th>{$people->getFirstName()}</th>
                    <th>{$people->getLastname()}</th>
                </tr>
            ";
            
        }
        $content = $content . "</table>";

        $content = $content . '<h3>Companies</h3>';

        $content = $content . "<table class='table table-striped table-hover'>";

        foreach ($this->companies as $company) {

            $content = $content . "
                <tr>
                    <th>{$company->getName()}</th>
                    <th>{$company->getCountry()}</th>
                </tr>
            ";
            
        }
        $content = $content . "</table>";

        return $content;
    }

    public function render() {

        echo str_replace('{{content}}', $this->getContent(), $this->getLayout());
    }

}