<?php
include('includes/config.php');
include('includes/header.php');
?>
    <div id="wrapper">
<main>
    <?php
$sql = 'SELECT * FROM BigDipper';

$iConn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_assoc($result)) {
    
    echo '<ul>';
    echo '<li class="bold">For more information <a href="database-view.php?id='.$row['StarID'].' ">'.$row['Name'].' </a></li>';
    echo '<li>Designation: '.$row['Designation'].'</li>';
    echo '<li>Distance: '.$row['Distance'].'</li>';
    echo '</ul>';
}
    
} else {
    
    echo 'OHHHHH!';
    
}

@mysqli_free_result($result);

@mysqli_close($iConn);
?>
</main>
<aside>
<h3>Big Dipper</h3>
    <p>The Big Dipper (US, Canada) or the Plough (UK, Ireland) is a large asterism consisting of seven bright stars of the constellation Ursa Major; Six of them are of second magnitude and one, Megrez (δ), of third magnitude. Four define a "bowl" or "body" and three define a "handle" or "head". It is recognized as a distinct grouping in many cultures. The North Star (Polaris), the current northern pole star and the tip of the handle of the Little Dipper (Little Bear), can be located by extending an imaginary line through the front two stars of the asterism, Merak (β) and Dubhe (α). This makes it useful in celestial navigation.</p>
    
    
</aside>
<?php
include('includes/footer.php');
?>