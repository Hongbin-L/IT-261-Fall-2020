<?php

include('includes/config.php');

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
}  else {
    header('Location:database.php');
}

$sql = 'SELECT * FROM BigDipper WHERE StarID = '.$id.'';

$iConn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_assoc($result)) {
    $Name = stripslashes($row['Name']);
    $Designation = stripslashes($row['Designation']);
    $Magnitude = stripslashes($row['Magnitude']);
    $Distance = stripslashes($row['Distance']);
    $Introduce = stripslashes($row['Introduce']);
    $Feedback = '';
}
    
} else {
    $Feedback = 'Sorry!';
}

include('includes/header.php'); ?>
    <div id="wrapper">
<main>
<h2>Welcome to <?php echo $Name;?>'s Page</h2>
<?php
if($Feedback == '') {
    echo '<ul>';
    echo '<li><b>Name:</b> '.$Name.' </li>';
    echo '<li><b>Designation:</b> '.$Designation.' </li>';
    echo '<li><b>Magnitude:</b> '.$Magnitude.' </li>';
    echo '<li><b>Distance:</b> '.$Distance.' </li>';
    echo '</ul>';
    echo '<p>'.$Introduce.'</p>';
    echo '<p><a href="database.php">Go back to the big dipper page!</a></p>';
}    else{
    echo $Feedback;
}

?>
</main>
    
<aside>
<?php
    if($Feedback == '') {
        echo'<img src="uploads/star'.$id.'.jpg" alt="'.$Name.'">';
    } else {
        echo $Feedback;
    }
@mysqli_free_result($result);

@mysqli_close($iConn);
?>


</aside>

<?php
include('includes/footer.php');
    
    