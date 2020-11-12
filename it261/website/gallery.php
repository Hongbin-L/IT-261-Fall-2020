<?php
include('includes/config.php');
include('includes/header.php');

?>

    <div id="wrapper">
        
<main>
    <h1><?php  echo $mainHeadline;  ?></h1>
<!--        <img src="../../images/alioth.jpg" alt="Alioth">-->
    <table class="candidates">
<?php foreach($people as $fullName => $image) : ?>
        <tr>
            <td>
                <img src="images/<?php echo substr($image, 0, 5);    ?>.jpg" alt="<?php echo $fullName;  ?>">
            </td>
            
            <td><?php echo str_replace('_', ' ', $fullName);  ?>
            </td>
            
            <td><?php echo substr($image, 6 );  ?>
            </td>
        </tr>
        
    <?php endforeach ; ?>
    </table>
    </main>
        
<aside>
    <h3>This is my headline 3 on the gallery page</h3>
    
    <?php echo randImages2($candidates); ?>
    <p> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt at felis in dapibus. Integer malesuada tempus lorem, ac varius neque auctor vel. Duis sagittis lectus id sem commodo egestas. Morbi id convallis lorem. Maecenas molestie rhoncus vulputate. Nunc pellentesque enim sit amet elit congue condimentum."</p>
    </aside>

 <?php
include('includes/footer.php');
?>