<?php

class invoiceController
{
    
    function __construct()
    {
        
    }

    // Display invoice view in browser.
    function renderView()
    {

        ob_start();
        include_once('../views/layout/mainLayout.php');
        $layout = ob_get_clean();

        ob_start();
        include_once('../views/invoices.php');
        $content = ob_get_clean();

        echo str_replace('{{content}}', $content, $layout);
    }
}
