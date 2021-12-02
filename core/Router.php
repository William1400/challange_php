<?php

// Include controller files.
include_once('../controllers/HomeController.php');
include_once('../controllers/ContactController.php');// Include contact controller. 
include_once('../controllers/ContactsController.php');
include_once('../controllers/CompaniesController.php');

/**
 * Retrieve url from browser and call appropriate method from appropriate controller.
 */
class Router
{

    function __construct($pdo)
    {

        // Instanciate controller objects.
        $homeController = new HomeController($pdo);
        $contactController = new ContactController($pdo);
        $contactsController = new ContactsController($pdo);
        $companiesController = new CompaniesControler($pdo);

        // Link appropriate controller method to each url.
        $routes = [

            'GET' => [

                'home' => [$homeController, 'renderHomeView'],
                'contact' => [$contactController, 'renderContactView'], 
                'contacts' => [$contactsController, 'renderContactsView'],
                'companies' => [$companiesController, 'renderCompaniesView']
            ],

            'POST' => [


            ]
        ];
        
        $method =  $_SERVER['REQUEST_METHOD']; 
      
        // Get url from browser.
        $url = explode('/', $_SERVER['REQUEST_URI']);
        if ($url[2] == '') {

            $path = 'home';
        } else {

            $path = $url[2];

            $position = strpos($path, '?');
            if ($position) {
                $path = substr($path, 0, $position);
            }
        }
        
        // Get the post Data.
        $data = [];
        if ($method == 'POST') {
           
            $data = $_POST;
        }
        elseif ($method == 'GET') {

            $data = $_GET;
        }

        // Call appropriate controller method.
        call_user_func($routes[$method][$path], $data);
    }   
}
