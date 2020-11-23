
<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$stars['Alioth'] = 'aliot bigdi Epsilon Ursae Majoris';
$stars['Alkaid'] = 'alkai bigdi Eta Ursae Majoris ';
$stars['Dubhe'] = 'dubhe bigdi Alpha Ursae Majoris';
$stars['Magrez'] = 'megre bigdi_Delta Ursae Majoris';
$stars['Merak'] = 'merak bigdi_Beta Ursae Majoris';
$stars['Mizar'] = 'mizar bigdi_Mizar /ˈmaɪzɑːr/ is a second-magnitude star';
$stars['Phecda'] = 'phecd bigdi_Gamma Ursae Majoris';

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
        $PageID = 'Calculator';
    break;
        
    case 'w5exercises.php':
        $title = "W5 Exercises";
        $logo = "fa-pencil";
        $PageID = 'W5 Exercises';
    break;
        
    case 'contact.php':
        $title = "Email";
        $logo = "fa-pencil";
        $PageID = 'Email';
    break;
        
    case 'w6exercises.php':
        $title = "W6 Exercises";
        $logo = "fa-pencil";
        $PageID = 'W6 Exercises';
    break;
        
    case 'gallery.php':
        $title = "Gallery";
        $logo = "fa-pencil";
        $PageID = 'Gallery';
    break;
        
    case 'w7exercises.php':
        $title = "W7 Exercises";
        $logo = "fa-pencil";
        $PageID = 'W7 Exercises';
    break;
        
    case 'database.php':
        $title = "Database";
        $logo = "fa-pencil";
        $PageID = 'Database';
    break;
        
    case 'w8exercises.php':
        $title = "W8 Exercises";
        $logo = "fa-pencil";
        $PageID = 'W8 Exercises';
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
$nav1['contact.php'] = "Email";
$nav1['w6exercises.php'] = "W6 Exercises";
$nav1['gallery.php'] = "Gallery";
$nav1['w7exercises.php'] = "W7 Exercises";
$nav1['database.php'] = "Database";
$nav1['w8exercises.php'] = "W8 Exercises";

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
