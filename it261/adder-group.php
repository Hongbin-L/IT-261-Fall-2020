<html> 
<head>
<title>My Adder Assignment</title>
<style>
    form {
        width: 350px;
        border: 1px solid red;
        margin: 20px auto;
        padding: 10px;
    }
    input[type=submit] {
        display:block;
    }
    label{
        display:block;
        margin-bottom: 10px;
    }
    
    h1 {
        color:green;
        text-align: center;
    }
    
    .center {
        text-align: center;
    }
    
</style>
</head>
<body> 
<h1>Adder Group</h1> 
<form action="" method="post"> 
<label>Enter the first number:</label>
<input type="text   " name="num1"><br> 
<label>Enter the second number:</label>
<input type="text" name="num2"><br> 
<input type="submit" value="Add Em!!"> 
</form> 
    <p class="center"><a href="w5exercises.php">Go Back</a></p>
</body> 

<?php

if(isset($_POST['num1'],
         $_POST['num2'])
   ){ 
$num1 = $_POST['num1']; 
$num2 = $_POST['num2'];
$myTotal = $num1 + $num2;
    
   if(empty($num1 && $num2)) {
     
     echo '<h2 class="center "style="color:red;">Error</h2>';
     echo '<p class="center">Please fill out all of the fields!<br>And it has be greater than zero!</p>';
     echo '<p class="center"><a href="">Reset page</a></p>';
    
}    elseif(is_numeric($num1) && is_numeric($num2)) {

     echo '<h3 class="center">You added '. $num1 .' and '.$num2.'</h3>'; 
     echo '<p class="center"> and the answer is <br>'.$myTotal.'!</p>'; 
     echo '<p class="center"><a href="">Reset page</a></p>';

}    else  {
      
      echo '<h2 class="center "style="color:red;">Enter only Numbers!</h2>';
      echo '<p class="center"><a href="">Reset page</a></p>';

}
}
?>
</html>
