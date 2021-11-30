<?php 

// Include controller files.
include_once('../controllers/HomeController.php');
include_once('../controllers/LoginController.php');

/**
 * Retrieve url from browser and call appropriate method from appropriate controller.
 */
class Router {
    
    function __construct() {

        // Instanciate controller objects.
        $homeController = new HomeController();
        $loginController = new LoginController();

        // Link appropriate controller method to each url.
        $routes = [

            'GET' => [
                'home' => [$homeController, 'renderView'], 
                'login' => [$loginController, 'renderView']
            ],

            'POST' => []
        ];
        
        $method =  $_SERVER['REQUEST_METHOD']; 
      
        //  Get url from browser.
        $url = explode('/', $_SERVER['REQUEST_URI']);
        if ($url[2] == '') {
            $controller_url = 'home';
        } else {
            $controller_url = $url[2];
        }

        // Call appropriate controller method.
        call_user_func($routes[$method][$controller_url]);
    }   
}

