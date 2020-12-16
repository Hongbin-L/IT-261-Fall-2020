<?php
session_start();

if(!isset($_SESSION['UserName'])) {
    $_SESSION['mag'] = 'you must log in first';
    header('Location: login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['UserName']);
    header('Location: login.php');
}
include('includes/config-fp.php');
include('includes/header-fp.php');

?>
<?php

if(isset($_SESSION['success'])) :?>
<div class="error success">
<h3>
    <?php
    echo $_SESSION['success'];
    unset ($_SESSION['success']);
    ?>
    </h3>
</div>
<?php endif ?>

<div class="error success">
<?php
    if(isset($_SESSION['UserName'])) :?>
    <h3>Welcom 
<?php echo $_SESSION['UserName'] ;  ?>
</h3>
<br>
<p><a href="index.php?logout='1' ">Log out!</a></p>
</div>
<?php endif  ?>
    <div id="wrapper">
        
<main>
     <h2 class="pageID">MySQL table</h2>
    <figure>
            <li><h4>The screenshot of user table</h4>
            <a href="images/userdb.JPG" >
            <img src="images/userdb.JPG"  class="adminer" alt="UserDatabase" />
                </a></li>
            <li><h4>The screenshot of Solar System table</h4>
                    <a href="images/solarsystemdb.JPG" >
                    <img src="images/solarsystemdb.JPG"  class="adminer" alt="SolarSystemDatabase" />
                </a></li>
               </figure>
        </main>
    
    <aside>
        <h3>about</h3>
        <p>Here is the screenshot of the MySQL table for User and Solar System!</p>
        </aside>
        
<?php
include('includes/footer-fp.php');
?>