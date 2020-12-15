<?php

include('includes/config-fp.php');

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
}  else {
    header('Location:database-fp.php');
}

$sql = 'SELECT * FROM SolarSystem WHERE StarID ='.$id.'';

$iConn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_assoc($result)) {
    $Name = stripslashes($row['Name']);
    $FromSun = stripslashes($row['FromSun']);
    $LengthYear = stripslashes($row['LengthYear']);
    $Introduce = stripslashes($row['Introduce']);
    $Feedback = '';
}
    
} else {
    $Feedback = 'Sorry!';
}

include('includes/header-fp.php'); ?>
        <div id="wrapper">
<main>

<h2>Welcome to <?php echo $Name; ?>'s Page</h2>
<?php
if($Feedback == '') {
    echo '<ul>';
    echo '<li><b>Name:</b> '.$Name.' </li>';
    echo '<li><b>Distance From Sun:</b> '.$FromSun.' </li>';
    echo '<li><b>Length Of Year:</b> '.$LengthYear.' </li>';
    echo '</ul>';
    echo '<p>'.$Introduce.'</p>';
    echo '<p><a href="database-fp.php">Go back to the Solar System page!</a></p>';
}    else{
    echo $Feedback;
}

?>
</main>

    
<aside>
<?php
    if($Feedback == '') {
        echo '<img src="uploads/star1'.$id.'.jpg" alt="'.$Name.'">';
    } else {
        echo $Feedback;
    }
@mysqli_free_result($result);

@mysqli_close($iConn);
?>


</aside>
</div>
<?php
include('includes/footer-fp.php');
        
        
        