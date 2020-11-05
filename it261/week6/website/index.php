<?php
include('includes/config.php');
include('includes/header.php');

?>

    <div id="wrapper">
    <h1 class="<?php  echo $center; ?>"><?php  echo $mainHeadline;  ?></h1>
<!--        <img src="../../images/alioth.jpg" alt="Alioth">-->
        <?php
        echo randImages($photos);
        ?>
        
        <blockquote>
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt at felis in dapibus. Integer malesuada tempus lorem, ac varius neque auctor vel. Duis sagittis lectus id sem commodo egestas. Morbi id convallis lorem. Maecenas molestie rhoncus vulputate. Nunc pellentesque enim sit amet elit congue condimentum.
        </blockquote>
    
    

 <?php
include('includes/footer.php');
?>