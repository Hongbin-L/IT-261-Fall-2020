<?php
include('includes/config.php');
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
<aside>
    <h3>This is my headline 3 on the gallery page</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eleifend lacus nec consequat malesuada. Nunc vel ligula eget velit congue venenatis. Ut leo lectus, ornare vel est eu, ornare venenatis metus. Nunc vitae neque dictum dui porttitor blandit dignissim non lacus. Fusce sit amet hendrerit enim.</p>
    </aside>

 <?php
include('includes/footer.php');
?>