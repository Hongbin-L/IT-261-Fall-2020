<?php
// currency logic

//1 ruble = 0.013 dollars
//1 pound sterling = 1.28 dollars
//1 Canadian dollar = 0.76 dollars
//1 Euro = 1.18 dollars
//1 Japanese yan = 0.0094 dollars
//1 Chinese yuan = 0.15 dollars

$rubles = 10000;
$rubles *= 0.013;
$rubles_num = number_format($rubles, 2);

$canada = 1000;
$canada *= 0.76;
$canada_num = number_format($canada, 2);
    
$pounds = 500;
$pounds *= 1.28;
$pounds_num = number_format($pounds, 2);

$euros = 1200;
$euros *= 1.18;
$euros_num = number_format($euros, 2);

$yen = 2000;
$yen *= 0.0094;
$yen_num = number_format($yen, 2);

$yuan = 5000;
$yuan *= 0.15;
$yuan_num = number_format($yuan, 2);

$total = $yen + $euros + $pounds + $canada + $rubles + $yuan;

$total_num = number_format($total, 2);

//rubles = 10000
//canada = 1000
//pounds = 500
//euros = 1200
//yen = 2000
//yuan = 5000



?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Currency logic</title>
<style>
    
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    
    table {
        width: 300px;
        margin: 20px auto;
        border: 1px solid green;
    }
    
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Money</th>
            <th>Dollars</th>
        </tr>
        <tr>
            <td>Rubles</td>
            <td><?php echo '$'.$rubles_num.''; ?></td>
        </tr>
        
        <tr>
            <td>Canadian</td>
            <td><?php echo '$'.$canada_num.''; ?></td>
        </tr>
        
        <tr>
            <td>Pounds</td>
            <td><?php echo '$'.$pounds_num.''; ?></td>
        </tr>
        
        <tr>
            <td>Euros</td>
            <td><?php echo '$'.$euros_num.''; ?></td>
        </tr>
        
        <tr>
            <td>Yen</td>
            <td><?php echo '$'.$yen_num.''; ?></td>
        </tr>
        
        <tr>
            <td>Yuan</td>
            <td><?php echo '$'.$yuan_num.''; ?></td>
        </tr>
        
        <tr>
            <th>Total</th>
                <th><?php echo '$'.$total_num.''; ?></th>
        </tr>
    </table>
</body>
</html>