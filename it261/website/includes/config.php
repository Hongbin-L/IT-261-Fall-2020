<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$people['Donald_Trump'] = 'trump President from NY.';
$people['Joe_Biden'] = 'biden Vice President from PA.';
$people['Hilary_Clinton'] = 'clint_Secretary from NY.';
$people['Bernie_Sanders'] = 'sande_Senator from VT.';
$people['Elizabeth_Warren'] = 'warre_Senator from MA.';
$people['Kamala_Harris'] = 'harri_Senator from CA.';
$people['Cory_Booker'] = 'booke_Senator from NJ.';
$people['Andrew_Yang'] = 'ayang_Entrepreneur from NY.';
$people['Pete_Buttigieg'] = 'butti_Mayor from IN.';
$people['Amy_Klobuchar'] = 'klobu_Senator from MN.';
$people['DJulian_Castro'] = 'castr_Housing/Urban from TX.';


switch(THIS_PAGE) {
    case  'index.php':
        $title = 'Homepage for our new website';
        $mainHeadline = 'Welcome to our Home Page';
        $center = 'center';
        $body = 'home';
        break;
        
        case  'about.php':
        $title = 'About page for our new website';
        $mainHeadline = 'Welcome to our Wonderful About Page!';
        $center = 'center';
        $body = 'about inner';
        break;
        
        case  'daily.php':
        $title = 'Daily Page';
        $mainHeadline = 'Welcome to the Daily';
        $center = 'center';
        $body = 'daily inner';
        break;
        
        case  'customers.php':
        $title = 'Our very important customers';
        $mainHeadline = 'Hello Customers - Good to See You!';
        $center = 'center';
        $body = 'customers inner';
        break;
        
        case  'contact.php':
        $title = 'Contact us today!';
        $mainHeadline = 'Welcome to our Contact Page!';
//        $center = 'center';
        $body = 'contact inner';
        break;
        
        case  'thx.php':
        $title = 'Our thank you page!';
        $mainHeadline = 'Thank you for filling out our form!';
//        $center = 'center';
        $body = 'contact inner';
        break;
        
        case  'gallery.php':
        $title = 'Check out our Gallery';
        $mainHeadline = 'Welcome to the Candidates Gallery Page';
//        $center = 'center';
        $body = 'gallery inner';
        break;
}

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['customer.php'] = 'Customers';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

function makeLinks($nav) {
    $myReturn = '';
    foreach($nav as $key => $value) {
        if(THIS_PAGE == $key) {
            $myReturn .= '<li><a href=" '.$key.' " class="active"> '.$value.' </a></li>';
            
            
        } else {
            $myReturn .= '<li><a href=" '.$key.' "> '.$value.' </a></li>';
            
            
        }
        
        
    }
    return $myReturn;
    
}

/*Random Images*/
function randImages($photos){

$photos[0] = 'alioth';
$photos[1] = 'alkaid';
$photos[2] = 'dubhe';
$photos[3] = 'merak';
$photos[4] = 'mizar';

$i = rand(0, count($photos)-1);
$randImages = '../images/'.$photos[$i].'.jpg';
echo '<img src="'.$randImages.'">';
}

function randImages2($candidates){

$candidates[0] = 'trump';
$candidates[1] = 'biden';
$candidates[2] = 'clint';
$candidates[3] = 'sande';
$candidates[4] = 'warre';
$candidates[5] = 'harri';
$candidates[6] = 'booke';
$candidates[7] = 'ayang';
$candidates[8] = 'butti';
$candidates[9] = 'klobu';
$candidates[10] = 'castr';
    
$i = rand(0, count($candidates)-1);
$randImages2 = 'images/'.$candidates[$i].'.jpg';
echo '<img src="'.$randImages2.'">';
}

function randImages3($brands){

$brands[0] = 'honda';
$brands[1] = 'toyota';
$brands[2] = 'bmw';
$brands[3] = 'audi';
$brands[4] = 'ford';
    
$i = rand(0, count($brands)-1);
$randImages3 = 'images/'.$brands[$i].'.png';
echo '<img src="'.$randImages3.'">';
}

/* Form php*/

$firstName = '';
$lastName = '';
$email = '';
//$phone = '';
$gender = '';
$cars = '';
$privacy = '';
$comments = '';
$tel = '';

$firstNameErr = '';
$lastNameErr = '';
$emailErr = '';
//$phoneErr = '';
$gendeErr = '';
$carsErr = '';
$privacyErr = '';
$commentsErr = '';
$telErr = '';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
     
    if(empty($_POST['firstName'])) {
    $firstNameErr = 'Please fill out your first name!';
    } else{
    $firstName = $_POST['firstName'];
    }
        
    if(empty($_POST['lastName'])) {
    $lastNameErr = 'Please fill out your last name!';
    } else{
    $lastName = $_POST['lastName'];
    }
        
    if(empty($_POST['email'])) {
    $emailErr = 'Please fill out your email!';
    } else{
    $email = $_POST['email'];
    }
        
    if(empty($_POST['tel'])) {
    $telErr = 'Please fill out your phone number!';
    } else{
    $tel = $_POST['tel'];
    }
        
    if(empty($_POST['gender'])) {
    $genderErr = 'Please check one!';
    } else{
    $gender = $_POST['gender'];
    }
        
        if($gender == 'male') {
            $male = 'checked';
        } elseif($gender == 'female'){
            $female = 'checked';
        }
        
    if(empty($_POST['cars'])) {
    $winesErr = 'Please check your favorite car brand!';
    } else{
    $cars = $_POST['cars'];
    }
        
    if(empty($_POST['comments'])) {
    $commentsErr = 'Please include your comments!';
    } else{
    $comments = $_POST['comments'];
    }
        
    if(empty($_POST['privacy'])) {
    $privacyErr = 'Please agree to our Privacy Rules!';
    } else{
    $privacy = $_POST['privacy'];
    }
        
function myCars() {
    $myReturn = '';
    if(!empty($_POST['cars'])) {
        $myReturn = implode(',', $_POST['cars']);
        
    } return $myReturn;
} 
        
if(empty($_POST['tel'])) {  // if empty, type in your number
$telErr = 'Your phone number please!';
} elseif(array_key_exists('tel', $_POST)){
if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['tel']))
{ // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
$telErr = 'Invalid format!';
} else{
$tel = $_POST['tel'];
}
}
        
    if(isset($_POST['firstName'],
            $_POST['lastName'],
            $_POST['gender'],
            $_POST['cars'],
            $_POST['comments'],
             $_POST['tel'],
            $_POST['privacy'])) {
        
        $to = 'liu01010303@gmail.com';
        $subject = 'Test Email' .date('m/d/y');
        $body = ''.$firstName.' has filled out your form  '.PHP_EOL.'';
        $body .= 'Email: '.$email.' '.PHP_EOL.'';
        $body .= 'Your phone number: '.$tel.' '.PHP_EOL.'';
        $body .= 'Your facorite car brand : '.myCars().' '.PHP_EOL.'';
        $body .= 'Gender: '.$gender.' '.PHP_EOL.'';
        $body .= 'Comments: '.$comments.'';
        
        $headers = array(
        'From' =>'no-reply@purplestar.club',
        'Reply-to' => ' '.$email.'');
        
        mail($to, $subject, $body, $headers);
        header('Location: thx.php');
        
        
    }
        
    }



?>