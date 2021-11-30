<?php

include_once('Router.php');

/**
 * Main application class.
 */
class Application {

    private $router;

    function __construct() {
        
        $this->router = new Router();
    }
}
