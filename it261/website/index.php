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
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt at felis in dapibus. Integer malesuada tempus lorem, ac varius neque auctor vel. Duis sagittis lectus id sem commodo egestas. Morbi id convallis lorem. Maecenas molestie rhoncus vulputate. Nunc pellentesque enim sit amet elit congue condimentum."
        </blockquote>
        
    <a href="https://github.com/Hongbin-L/IT-261-Fall-2020/tree/circleci-project-setup/it261/website">Here is my EXTRA CREDIT LINK link to my Github acount showing tou my randImages function (index.php and config.php)</a>
    

 <?php
include('includes/footer.php');
?>