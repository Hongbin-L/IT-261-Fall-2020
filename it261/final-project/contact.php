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
<h2>Choose your stars!</h2>

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
    <h1 class="cantact"><?php  echo $mainHeadline;  ?></h1>
<!--        <img src="../../images/alioth.jpg" alt="Alioth">-->
        <?php include('includes/form-fp.php'); ?>
    </main>
        
<aside>
    <h3>Stars of Big Dipper Might Be Interesting to You!</h3>
    <div>
    <?php echo randImages2($candidates); ?>
    
    </div>
    </aside>

 <?php
include('includes/footer-fp.php');
?>