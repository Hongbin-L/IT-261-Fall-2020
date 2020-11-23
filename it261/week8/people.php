<?php

include('config.php');
include('include/header.php');
?>
<main>
    <?php
$sql = 'SELECT * FROM People';

$iConn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_assoc($result)) {
    
    echo '<ul>';
    echo '<li class="bold">For more information <a href="people-view.php?id='.$row['PeopleID'].' ">'.$row['FirstName'].' </a></li>';
    echo '<li>'.$row['LastName'].'</li>';
    echo '<li>'.$row['Occupation'].'</li>';
    echo '</ul>';
}
    
} else {
    
    echo 'Nobody home!';
    
}

@mysqli_free_result($result);

@mysqli_close($iConn);
?>
</main>
<aside>
<h3>This is my aside</h3>
    
    
</aside>
<?php
include('include/footer.php');
?>