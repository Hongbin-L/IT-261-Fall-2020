<?php
//$firstName = 'Hongbin';
//$firstName = 'Yuqiang';
$lastName = 'Liu';

$car = ['Toyota', 'Ford', 'Cheverolet', 'Nissan'];
$car = array('Toyota', 'Ford', 'Cheverolet', 'Nissan');
print_r($car);

//echo $firstName. ' ' .$lastName;
echo $lastName;
echo '<br>';
//echo "<h1> $firstName </h1>";

$firstName[] = 'Hongbin';
$firstName[] = 'Yuqiang';
$firstName[] = 'Hank';
$firstName[] = 'Alan';
$firstName[] = 'Sara';

$firstName = ['Hongbin', 'Yuqiang', 'Hank', 'Alan', 'Sara'];

$firstName =  array('Hongbin', 'Yuqiang', 'Hank', 'Alan', 'Sara');

print_r($firstName);
echo '<br>';

echo $firstName[1];

$show = array('Name' => 'the Crown', 
              'Actor' => 'Clair Foy', 
              'Genre' =>'Historical Fiction');

$showName = 'The Crown';
$showActor = 'Clair Foy';
$showGenre = 'Historical Fiction';

echo '<p>My favorite show is '.$showName.', starring '.$showActor.' which is a '.$showGenre.'</p>';


$begAlpha = 'abc';
$begAlph2 = 'def';
echo '<br>';
echo $begAlpha . $begAlph2;

echo '<br>';

$begAlpha = 'abc';
$begAlpha = 'def';

echo $begAlpha;

echo '<br>';

$begAlpha = 'abc';
$begAlpha .= 'def';

echo $begAlpha;

echo '<br>';

$x = 5;
echo $x;
$x *=5;
echo '<br>';
echo $x;
$y = 100;
$y *= .0957;
echo '<br>';
echo $y;
echo '<br>';
$y_num = number_format($y, 2);
echo '<br>';
echo 'My tax rate for 100 dollars is $'.$y_num.'';
echo '<br>';
$a = 20;
$a += 40;
echo '<br>';
echo $a;
$a_num = number_format($a, 0);
echo '<br>';
echo '20+40='.$a_num.'';