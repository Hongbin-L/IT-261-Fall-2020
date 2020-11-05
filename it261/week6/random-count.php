<?php

//$dice = rand(1, 6);
//echo $dice;

//$dice1 = rand(1, 6);
//$dice2 = rand(1, 6);
//echo $dice1;
//echo '<br>';
//echo $dice2;

$dice1 = rand(1, 6);
$dice2 = rand(1, 6);
if($dice1 == $dice2) {
    echo 'You\'ve got a double!';
}   else {
    echo '<br>';
    echo 'You don\'t';
    echo '<br>';
}

//$photos = array('alioth', 'alkaid', 'dubhe', 'merak', 'mizar' );
//$photos = ['alioth', 'alkaid', 'dubhe', 'merak', 'mizar' ];

$photos[0] = 'alioth';
$photos[1] = 'alkaid';
$photos[2] = 'dubhe';
$photos[3] = 'merak';
$photos[4] = 'mizar';

$i = rand(0, count($photos)-1);
$selectedImages = '../images/'.$photos[$i].'.jpg';
echo '<img src="'.$selectedImages.'">';

?>