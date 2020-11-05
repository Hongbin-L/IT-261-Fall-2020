<?php

//function greeting() {
//    echo 'hello!';
//}
//
//greeting();

function greeting() {
    return 'hello!';
}

//$variable = greeting();
//echo$variable;

function getArea($width, $height) {
    $calculation = $width * $height;
    return $calculation;
}

$calculation = getArea(100, 205);
echo $calculation;

echo'<br>';

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

function myNav($nav) {
    $myReturn = implode(',', $nav);
    return $myReturn;
}

echo myNav($nav);

echo '<br>';

function popupAd1() {
    
    echo '
    <h2>This is my pop up ad number 1!!!</h2>
    <h2>This is my pop up ad number 1!!!</h2>
    <h2>This is my pop up ad number 1!!!</h2>
    <h2>This is my pop up ad number 1!!!</h2>
    ';
}

popupAd1();
echo'<br>';


function popupAd2() {
    $variable = '<h2>This is my pop up ad number 2!!!</h2>
    <img src="website/images/bigdipper2.jpg" alt="The bigdipper">
    <h2>Watch the stars!!!</h2>
    ';
    
    return $variable;
}

echo popupAd2();