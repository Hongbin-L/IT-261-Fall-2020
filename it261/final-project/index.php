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
include('includes/header-fp-home.php');
?>
<?php

if(isset($_SESSION['success'])) :?>
<div>
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

<h2>Welcom to the Galaxy</h2>

<?php
include('includes/footer-fp.php');

?>