<?php

$salary = 150000;

//if($salary == 200000) {
//    echo 'Yippy and skippy!!!!';
//}  else {
//    echo 'Not too happy!';
//}


if($salary >= 2000000) {
    echo 'Yippy and Skippy, and life is good!!';
} elseif($salary >=100000) {
    echo 'Not bad, still happy';
} else {
    echo 'I may need to work harder!';
}

echo '<br>';

echo date('y');
echo '<br>';

echo date('h:i a');

echo '<h2>Reset the timezone</h2>';

date_default_timezone_set('America/Los_Angeles');

echo "The real time is " .date('h:i:sa');

echo '<br>';
echo date('H:i a');
echo '<br>';
echo date('H:i a');
echo '<br>';
$correct_time = date('H:i:sa');

if($correct_time < 10){
    echo 'Good Morning!';
} elseif($correct_time < 18) {
    echo 'Good Afternoon!';
} else {
    echo 'Good Evening';
}

