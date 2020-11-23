<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php  $title;   ?></title>
    <link href="css/styles2.css" type="text/css" rel="stylesheet">

</head>
<style>
   #cssmenu ul{
        background-color : <?php echo $color;   ?>;
    }
    
    .logo {
        color: <?php echo $color;   ?>;
    }
    
    #cssmenu ul li:hover{
        color: <?php echo $colorDark;   ?>;
    }
    
    #cssmenu ul li:hover a{
        color: <?php echo $colorDark;   ?>;
    }
    #cssmenu ul li:hover ul li{
        background-color: <?php echo $color;   ?>;
    }
    #cssmenu ul li:hover ul li:hover{
         background-color: <?php echo $colorDark;   ?>;
    }
    footer {
        background-color: <?php echo $color;   ?>;
    }
</style>
<body class="<?php echo $body;   ?>">
    <header>
        <div class="inner-header">
            <img id="logo" src="images/php-logo.png" alt="logo">
    <nav>
         <ul>
            <?php echo makeLinks($nav) ; ?>
        </ul>
        </nav>
            </div>
    </header>