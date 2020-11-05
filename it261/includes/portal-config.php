<?php

ob_start();

date_default_timezone_set('America/Los_Angeles');


define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

$logo_color = ''; 

switch(THIS_PAGE){

    case 'index.php':
        $title = "Hongbin's Portal Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
        
    case 'week1.php':
    $title = "Week1";
    $logo = "fa-pencil";
        $PageID = 'Week1';
    break;

    case 'screenshot.php':
        $title = "Screenshot";
        $logo = "fa-pencil";
        $PageID = 'Screenshot';
    break;
    
    case 'w2exercises.php':
        $title = "W2 Exercises";
        $logo = "fa-pencil";
        $PageID = 'W2 Exercises';
    break;
        
    case 'switch.php':
        $title = "Switch";
        $logo = "fa-pencil";
        $PageID = 'Switch';
    break;
        
    case 'w3exercises.php':
        $title = "W3 Exercises";
        $logo = "fa-pencil";
        $PageID = 'W3 Exercises';
    break;
        
    case 'troubleshoot.php':
        $title = "Troubleshoot";
        $logo = "fa-pencil";
        $PageID = 'Troubleshoot';
    break;
        
    case 'w4exercises.php':
        $title = "W4 Exercises";
        $logo = "fa-pencil";
        $PageID = 'W4 Exercises';
    break;
        
    case 'calculator.php':
        $title = "Calculator";
        $logo = "fa-pencil";
        $PageID = 'Calculato';
    break;
        
    case 'w5exercises.php':
        $title = "W5 Exercises";
        $logo = "fa-pencil";
        $PageID = 'W5 Exercises';
    break;
        
    case 'week6.php':
        $title = "Week6";
        $logo = "fa-pencil";
        $PageID = 'Week6';
    break;
        
    case 'w6exercises.php':
        $title = "W6 Exercises";
        $logo = "fa-pencil";
        $PageID = 'W6 Exercises';
    break;
        
    case 'week7.php':
        $title = "Week7";
        $logo = "fa-pencil";
        $PageID = 'Week7';
    break;
        
    case 'week8.php':
        $title = "Week8";
        $logo = "fa-pencil";
        $PageID = 'Week8';
    break;
        
    default:    
    $title = THIS_PAGE;    
    $logo = '';
}

$nav1['index.php'] = "Welcome";
$nav1['week1.php'] = "Week1";
$nav1['screenshot.php'] = "Screenshot";
$nav1['w2exercises.php'] = "W2 Exercises";
$nav1['switch.php'] = "Switch";
$nav1['w3exercises.php'] = "W3 Exercises";
$nav1['troubleshoot.php'] = "Troubleshoot";
$nav1['w4exercises.php'] = "W4 Exercises";
$nav1['calculator.php'] = "Calculato";
$nav1['w5exercises.php'] = "W5 Exercises";
$nav1['week6.php'] = "Week6";
$nav1['w6exercises.php'] = "W6 Exercises";
$nav1['week7.php'] = "Week7";
$nav1['week8.php'] = "Week8";


function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}



?>
