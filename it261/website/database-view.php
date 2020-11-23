<?php

include('config.php');

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
}  else {
    header('Location:people.php');
}

$sql = 'SELECT * FROM People WHERE PeopleID = '.$id.'';

$iConn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_assoc($result)) {
    $FirstName = stripslashes($row['FirstName']);
    $LasttName = stripslashes($row['LastName']);
    $Occupation = stripslashes($row['Occupation']);
    $Email = stripslashes($row['Email']);
    $BirthDate = stripslashes($row['BirthDate']);
    $Description = stripslashes($row['Description']);
    $Feedback = '';
}
    
} else {
    $Feedback = 'Sorry, no candidates - they are partying';
}

include('include/header.php'); ?>

<main>
<h2>Welcome to <?php echo $FirstName;?>'s Page</h2>
<?php
if($Feedback == '') {
    echo '<ul>';
    echo '<li><b>First Name:</b> '.$FirstName.' </li>';
    echo '<li><b>Last Name:</b> '.$LastName.' </li>';
    echo '<li><b>Occupation:</b> '.$Occupation.' </li>';
    echo '<li><b>Email:</b> '.$Email.' </li>';
    echo '<li><b>Birthdate:</b> '.$BirthDate.' </li>';
    echo '</ul>';
    echo '<p>'.$Description.'</p>';
}    else{
    echo $Feedback;
    echo'<br>';
echo '<p><a href="people.php">Go back to the people page!</a></p>';
}

?>
</main>
    
<aside>
<?php
    if($Feedback == '') {
        echo'<img src="uploads/people'.$id.'.jpg" alt="'.$FirstName.'">';
    } else {
        echo $Feedback;
    }
@mysqli_free_result($result);

@mysqli_close($iConn);
?>


</aside>

<?php
include('include/footer.php');
    
    