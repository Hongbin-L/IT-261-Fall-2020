<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php  echo $title;   ?></title>
<link href="css/style-fp.css" rel="stylesheet">
<link href="css/nav-fp.css" rel="stylesheet" />
<style>
    #wrapper {
        color: <?php echo $colorDark;   ?>;
    }
</style>
</head>

<body>
<div class="header">
    <header>
    <h1><img id="logo" src="images/logostar-fp.png" alt="logo">Purple Star</h1>
    <nav id="cssmenu">
        <ul class="center" >
            <li><?php echo makeLinks($nav) ; ?></li>         
        </ul>
    </nav>
    </header>