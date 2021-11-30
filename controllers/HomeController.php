<?php

/**
 * Controller of home page.
 */
class HomeController {

    function __construct() {}

    // Display home view in browser.
    function renderView() {

        ob_start();
        include_once('../views/layout/mainLayout.php');
        $layout = ob_get_clean();

        ob_start();
        include_once('../views/home.php');
        $content = ob_get_clean();

        echo str_replace('{{content}}', $content, $layout);
    }
    
    // add new method(function) for post method.
}