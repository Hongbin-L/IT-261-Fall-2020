<?php

ob_start();
define('DEBUG', 'FALSE');

include('credentials.php');













function myerror($myFile, $myLine, $errorMsg) {
    
    if(defined('DEBUG') && DEBUG) {
        
        echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
        echo 'Error Message: <b> '.$errorMsg.' </b>';
        die();
    } else {
        echo "I'm sorry, we have encountered an error. ";
        die();
    }
}