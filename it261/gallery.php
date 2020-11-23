<?php
include('includes/portal-config.php');
include('includes/header.php');

?>

    <div id="wrapper">
        
<main>
    <h2 class="pageID">Big Dipper</h2>
<!--        <img src="../../images/alioth.jpg" alt="Alioth">-->
    <table class="candidates">
<?php foreach($stars as $name => $image) : ?>
        <tr>
            <td>
                <img src="images/<?php echo substr($image, 0, 5);    ?>.jpg" alt="<?php echo $name;  ?>">
            </td>
            
            <td><?php echo str_replace('_', ' ', $name);  ?>
            </td>
            
            <td><?php echo substr($image, 12);  ?>
            </td>
            <td>
                <img src="images/<?php echo substr($image, 6, 5);  ?>.jpg">
            </td>
        </tr>
        
    <?php endforeach ; ?>
    </table>
    </main>
        

 <?php
include('includes/fooder.php');
?>