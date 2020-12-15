<?php

ob_start();
define('DEBUG', 'TRUE');

include('credentials-fp.php');

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$stars['Alioth'] = 'aliot bigdi Epsilon Ursae Majoris';
$stars['Alkaid'] = 'alkai bigdi Eta Ursae Majoris ';
$stars['Dubhe'] = 'dubhe bigdi Alpha Ursae Majoris';
$stars['Magrez'] = 'megre bigdi_Delta Ursae Majoris';
$stars['Merak'] = 'merak bigdi_Beta Ursae Majoris';
$stars['Mizar'] = 'mizar bigdi_Mizar /ˈmaɪzɑːr/ is a second-magnitude star';
$stars['Phecda'] = 'phecd bigdi_Gamma Ursae Majoris';


switch(THIS_PAGE) {
    case  'index.php':
        $title = 'Purple Star';
        $mainHeadline = 'Welcome to Purple Star!';
        $center = 'center';
        $body = 'home';
        break;
        
        case  'login.php':
        $title = 'Purple Star';
        $mainHeadline = 'Welcome to Purple Star!';
        $center = 'center';
        $body = 'home';
        break;
        
        case  'register.php':
        $title = 'Purple Star';
        $mainHeadline = 'Welcome to Purple Star!';
        $center = 'center';
        $body = 'home';
        break;
        
        case  'about.php':
        $title = 'About page';
        $mainHeadline = 'Welcome to My About Page!';
        $center = 'center';
        $body = 'about inner';
        break;
        
        case  'bigdipper.php':
        $title = 'BigDipper';
        $mainHeadline = 'Welcome to the Big Dipper!';
        $center = 'center';
        $body = 'daily inner';
        break;
        
        case  'database-fp.php':
        $title = 'Solar System';
        $mainHeadline = 'Welcome to Solar System!';
//        $center = 'center';
        $body = 'database inner';
        break;
        
        case  'database-view-fp.php':
        $title = 'Solar System';
        $mainHeadline = 'Welcome to Solar System!';
//        $center = 'center';
        $body = 'database-view inner';
        break;

        case  'contact.php':
        $title = 'Contact me today!';
        $mainHeadline = 'Contact Me!';
//        $center = 'center';
        $body = 'contact inner';
        break;
        
        case  'thx.php':
        $title = 'Thank you!';
        $mainHeadline = 'Thank you for filling out our form!';
//        $center = 'center';
        $body = 'contact inner';
        break;
        
}

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['bigdipper.php'] = 'BigDipper';
$nav['database-fp.php'] = 'Solar System';
$nav['contact.php'] = 'Contact';

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
function randImages($galaxy){

$galaxy[0] = 'galaxy1';
$galaxy[1] = 'galaxy2';
$galaxy[2] = 'galaxy3';
$galaxy[3] = 'galaxy4';

$i = rand(0, count($galaxy)-1);
$randImages = '
images/'.$galaxy[$i].'.jpg';
echo '<img src="'.$randImages.'" alt="Galaxy">';
}

function randImages2($candidates){

$candidates[0] = 'aliot';
$candidates[1] = 'alkai';
$candidates[2] = 'dubhe';
$candidates[3] = 'megre';
$candidates[4] = 'merak';
$candidates[5] = 'mizar';
$candidates[6] = 'phecd';
    
$candidatesC[0] = 'Alioth';
$candidatesC[1] = 'Alkaid';
$candidatesC[2] = 'Dubhe';
$candidatesC[3] = 'Megrez';
$candidatesC[4] = 'Merak';
$candidatesC[5] = 'Mizar';
$candidatesC[6] = 'Phecda';
    
$candidatesCom[0] = 'Epsilon Ursae Majoris (Latinised from ε Ursae Majoris, abbreviated Epsilon UMa, ε UMa), officially named Alioth /ˈæliɒθ/, is, despite being designated "ε" (epsilon), the brightest star in the constellation of Ursa Major, and at magnitude 1.77 is the thirty-second brightest star in the sky.It is the star in the tail of the bear closest to its body, and thus the star in the handle of the Big Dipper (or Plough) closest to the bowl. It is also a member of the large and diffuse Ursa Major moving group. Historically, the star was frequently used in celestial navigation in the maritime trade, because it is listed as one of the 57 navigational stars.';
$candidatesCom[1] = 'Eta Ursae Majoris (Latinised from η Ursae Majoris, abbreviated Eta UMa, η UMa), formally named Alkaid /ælˈkeɪd/, is a star in the constellation of Ursa Major. It is the most eastern (leftmost) star in the Big Dipper (or Plough) asterism. However, unlike most stars of the Big Dipper, it is not a member of the Ursa Major moving group. With an apparent visual magnitude of +1.84, it is the third-brightest star in the constellation and one of the brightest stars in the night sky.';
$candidatesCom[2] = 'Alpha Ursae Majoris (Latinised from α Ursae Majoris, abbreviated Alpha UMa, α UMa), formally named Dubhe /ˈdʌbiː/, is, despite being designated "α" (alpha), the second-brightest object in the constellation of Ursa Major.Alpha Ursae Majoris forms part of the Big Dipper (also known as the Plough or the Great Bear), and is the northern of the pointers, the two stars of Ursa Major which point towards Polaris, the North Star.';
$candidatesCom[3] = 'Delta Ursae Majoris (δ Ursae Majoris, abbreviated Delta UMa, δ UMa), formally named Megrez /ˈmiːɡrɛz/, is a star in the northern circumpolar constellation of Ursa Major. With an apparent magnitude of +3.3, it is the dimmest of the seven stars in the Big Dipper asterism. Parallax measurements yield a distance estimate of 80.5 light-years (24.7 parsecs) from the Sun.';
$candidatesCom[4] = 'Beta Ursae Majoris (β Ursae Majoris, abbreviated Beta UMa, β UMa), formally named Merak /ˈmɪəræk/, is a star in the northern circumpolar constellation of Ursa Major.The apparent visual magnitude of this star is +2.37, which means it is readily visible to the naked eye. It is more familiar to northern hemisphere observers as one of the "pointer stars" in the Big Dipper, or the Plough (UK), which is a prominent asterism of seven stars that forms part of the larger constellation. Extending an imaginary straight line from this star through the nearby Alpha Ursae Majoris (Dubhe) extends to Polaris, the north star.';
$candidatesCom[5] = 'Mizar /ˈmaɪzɑːr/ is a second-magnitude star in the handle of the Big Dipper asterism in the constellation of Ursa Major. It has the Bayer designation ζ Ursae Majoris (Latinised as Zeta Ursae Majoris). It forms a well-known naked eye double star with the fainter star Alcor, and is itself a quadruple star system. The whole system lies about 83 light-years away from the Sun, as measured by the Hipparcos astrometry satellite, and is part of the Ursa Major Moving Group.';
$candidatesCom[6] = 'Gamma Ursae Majoris (γ Ursae Majoris, abbreviated Gamma UMa, γ UMa), formally named Phecda /ˈfɛkdə/ is a star in the constellation of Ursa Major. Since 1943, the spectrum of this star has served as one of the stable anchor points by which other stars are classified. Based upon parallax measurements with the Hipparcos astrometry satellite, it is located at distance of around 83.2 light-years (25.5 parsecs) from the Sun.It is more familiar to most observers in the northern hemisphere as the lower-left star forming the bowl of the Big Dipper, together with Alpha Ursae Majoris (Dubhe, upper-right), Beta Ursae Majoris (Merak, lower-right) and Delta Ursae Majoris (Megrez, upper-left). Along with four other stars in this well-known asterism, Phecda forms a loose association of stars known as the Ursa Major moving group. Like the other stars in the group, it is a main sequence star, as the Sun is, although somewhat hotter, brighter and larger.Phecda is located in relatively close physical proximity to the prominent Mizar-Alcor star system. The two are separated by an estimated distance of 8.55 ly (2.62 pc); much closer than the two are from the Sun. The star Beta Ursae Majoris is separated from Gamma Ursae Majoris by 11.0 ly.';
    
$i = rand(0, count($candidates)-1);
$randImages2 = 'images/'.$candidates[$i].'.jpg';
echo '<img src="'.$randImages2.'" alt="Star">';
echo 'This is '.$candidatesC[$i].'';
echo '<br>';
echo ''.$candidatesCom[$i].'';
}

/* Form php*/

$firstName = '';
$lastName = '';
$email = '';
$gender = '';
$stars = '';
$privacy = '';
$comments = '';


$firstNameErr = '';
$lastNameErr = '';
$emailErr = '';
$gendeErr = '';
$starsErr = '';
$privacyErr = '';
$commentsErr = '';


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
        
//    if(empty($_POST['tel'])) {
//    $telErr = 'Please fill out your phone number!';
//    } else{
//    $tel = $_POST['tel'];
//    }
        
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
        
    if(empty($_POST['Stars'])) {
    $starsErr = 'Please check your favorite Stars!';
    } else{
    $stars = $_POST['Stars'];
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
        
function myStars() {
    $myReturn = '';
    if(!empty($_POST['Stars'])) {
        $myReturn = implode(',', $_POST['Stars']);
        
    } return $myReturn;
} 
        
////if(empty($_POST['tel'])) {  // if empty, type in your number
////$telErr = 'Your phone number please!';
////} elseif(array_key_exists('tel', $_POST)){
////if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['tel']))
////{ // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
////$telErr = 'Invalid format!';
////} else{
////$tel = $_POST['tel'];
////}
//}
        
    if(isset($_POST['firstName'],
            $_POST['lastName'],
            $_POST['gender'],
            $_POST['Stars'],
            $_POST['comments'],
//             $_POST['tel']
            $_POST['privacy'])) {
        
        $to = 'liu01010303@gmail.com';
        $subject = 'Test Email' .date('m/d/y');
        $body = ''.$firstName.' has filled out your form  '.PHP_EOL.'';
        $body .= 'Email: '.$email.' '.PHP_EOL.'';
//        $body .= 'Your phone number: '.$tel.' '.PHP_EOL.'';
        $body .= 'The facorite stars : '.myStars().' '.PHP_EOL.'';
        $body .= 'Gender: '.$gender.' '.PHP_EOL.'';
        $body .= 'Comments: '.$comments.'';
        
        $headers = array(
        'From' =>'no-reply@purplestar.club',
        'Reply-to' => ' '.$email.'');
        
        mail($to, $subject, $body, $headers);
        header('Location: thx.php');
        
        
    }
        
    }

function myerror($myFile, $myLine, $errorMsg) {
    
    if(defined('DEBUG') && DEBUG) {
        
        echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
        echo 'Error message: <b> '.$errorMsg.' </b>';
        die();
    } else {
        echo 'Houston, we have a problem!';
        die();
    }
}

?>