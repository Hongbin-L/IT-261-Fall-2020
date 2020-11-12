<?php
include('includes/config.php');
include('includes/header.php');

?>

    <div id="wrapper">
        
<main>
    <h1><?php  echo $mainHeadline;  ?></h1>
<!--        <img src="../../images/alioth.jpg" alt="Alioth">-->
        <?php include('includes/form.php'); ?>
    </main>
        
<aside>
    <h3>The brand you might like!</h3>
    
    <?php echo randImages3($brands); ?>
    
    <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."</p>
    
    </aside>

 <?php
include('includes/footer.php');
?>