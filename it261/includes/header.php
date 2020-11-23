<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title; ?></title>
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
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
<body>
<main class="wrapper">
<header>
  <h1><i class="logo fa <?php echo $logo; ?>"></i><?php echo $PageID; ?></h1>
<nav id="cssmenu">
    <ul>
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="week1.php">Week1</a></li>
        
        <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i>Week2</span></a>
        <ul>
            <li><a href="screenshot.php"><span>Screenshot</span></a></li>
            <li><a href="w2exercises.php"><span>W2 Exercises</span></a></li>
        </ul>
        </li>
        
        <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i>Week3</span></a>
            
        <ul>
            <li><a href="switch.php"><span>Switch</span></a></li>
            <li><a href="w3exercises.php"><span>W3 Exercises</span></a></li>
        </ul>
        </li>
        
            <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i>Week4</span></a>
        <ul>
            <li><a href="troubleshoot.php"><span>Troubleshoot</span></a></li>
            <li><a href="w4exercises.php"><span>W4 Exercises</span></a></li>
        </ul>
            </li>
        
            <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i>Week5</span></a>
        <ul>
            <li><a href="calculator.php"><span>Calculator</span></a></li>
            <li><a href="w5exercises.php"><span>W5 Exercises</span></a></li>
        </ul>
            </li>
            
            <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i>Week6</span></a>
        <ul>
            <li><a href="website/contact.php"><span>Email</span></a></li>
            <li><a href="w6exercises.php"><span>W6 Exercises</span></a></li>
        </ul>
            </li>
        
            <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i>Week7</span></a>
        <ul>
            <li><a href="gallery.php"><span>Gallery</span></a></li>
            <li><a href="w7exercises.php"><span>W7 Exercises</span></a></li>
        </ul>
            </li>
        
               <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i>Week8</span></a>
        <ul>
            <li><a href="database.php"><span>Database</span></a></li>
            <li><a href="w8exercises.php"><span>W8 Exercis.phpes</span></a></li>
        </ul>
            </li>
        <li><a href="website/index.php" class="selected">Website</a></li>
    </ul>
</nav>
    
</header>