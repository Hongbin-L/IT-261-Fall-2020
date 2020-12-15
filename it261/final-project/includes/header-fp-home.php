<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="robots" content="noindex,nofollow" />
<meta name="viewport" content="width=device-width" />
<title><?php  echo $title;   ?></title>
<link href="css/style-fp-home.css" rel="stylesheet" />
<link href="css/nav-fp-home.css" rel="stylesheet" />
</head>

<body>
<div class="header">
    <header>
    <h1><img id="logo" src="images/logostar-fp.png" alt="logo">Purple Star</h1>
    <nav id="cssmenu">
        <ul class="center" >
            <?php echo makeLinks($nav) ; ?>        
        </ul>
    </nav>
    </header>