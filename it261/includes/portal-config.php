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
        
    case 'week4.php':
        $title = "Week4";
        $logo = "fa-pencil";
        $PageID = 'Week4';
    break;
        
    case 'week5.php':
        $title = "Week5";
        $logo = "fa-pencil";
        $PageID = 'Week5';
    break;
        
    case 'week6.php':
        $title = "Week6";
        $logo = "fa-pencil";
        $PageID = 'Week6';
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
$nav1['week4.php'] = "Week4";
$nav1['week5.php'] = "Week5";
$nav1['week6.php'] = "Week6";
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
