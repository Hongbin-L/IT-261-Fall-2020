
<html> 
<head>
<title>My Adder Assignment</title>
<style>
    form {
        width: 350px;
        border: 1px solid green;
        margin: 20px auto;
        padding: 10px;
    }
    
    input[type=submit] {
        display:block;
    }
    
    textarea input {
        margin-bottom: 10px;
    }
    
    h1 {
        color:red;
        text-align: center;
    }
    
    .center {
        text-align: center;
    }
</style>
</head>
<body> 
<h1>Adder.php</h1> 
<form action="" method="post"> 
<label>Enter the first number:</label>
<input type="text" name="num1"><br> 
<label>Enter the second number:</label>
<input type="text" name="num2"><br> 
<input type="submit" value="Add Em!!"> 
</form> 
<p class="center"><a href="index.php">Return to my portal</a></p>
</body> 

<?php

if (isset($_POST['num1'], 
        $_POST['num2'] )
   ){ 
$num1 = $_POST['num1']; 
$num2 = $_POST['num2']; 
$myTotal = $num1 + $num2; 
echo '<h2 class="center">You added '. $num1 .' and '.$num2.'</h2>'; 
echo '<p class="center "style="color:red;"> and the answer is <br>'.$myTotal.'!</p>'; 
echo '<p class="center"><a href="">Reset page</a></p>';
} 
?>

                            
<!--Form not opened correctly-->
<!--Added method post*/-->
<!--Added closing quotationg in the value of "Add Em!!"-->
<!--Missing label opening tag-->
<!--Label tag is in the wrong place*/-->
<!--Missing the opening and closing tag of label-->
<!--Changing the capital N to small n-->
<!--Wrong spelling of type-->
<!--In php, Missing $_POST['num2']-->
<!--Changing the capital N to small n-->
<!--No need - after $myTotal-->
<!--Missing h2 closing tag  -->
<!--In h2 tag change double quotes to single quotes-->
<!--In p tag missing the closing quotating-->
<!--style="color:red switched places with and the answer is, and put the style="color:red in to the p tag-->
<!--change double quotes to single quotes-->
<!--Missing the p closing tag and semicolons-->
<!--No need ';{?> after html closing tag-->
</html>

