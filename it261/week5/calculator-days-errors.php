


<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Calculator</title>
    
    <style>
        
        form {
            width: 545px;
            margin: 0 auto;
            background: beige;

        }
        
        h1 {
            text-align: center;
        }
        
        h2 {
            text-align: center;
            color: red;
        }
        
        h3 {
          color: red;  
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        input {
            margin-bottom: 10px;
        }
        
        .btm {
            margin-top: 20px;
            display: block;
        }
        
        li {
            list-style-type: none;
        }
        
        .box1 {
            width: 500px;
            margin: 20px auto;
            border: 1px solid;
            padding: 20px;
        }
        
        .box2 {
            width: 500px;
            margin: 20px auto;
            border: 1px solid black;
            padding: 20px;
            text-align: center;
        }
    
        select {
            margin-bottom: 10px;
        }
        
        .center {
            text-align: center;
        }
        
        </style>


</head>

<body>
    
    <h1>Our Trip Calculator</h1>
        
    <form action="" method="post">
            
        <fieldset>
             <label>Your Name</label>
            <input type="text" name="name">
            
            <label>How many miles will you be driving</label>
            <input type="text" name="miles">
            
            <label>How many hours per day would you like to be driving</label>
            <input type="text" name="hours">
            
            <label>Price per gallon</label>
            <ul>
                <li><input type="radio" name="price" value="3.00">$3.00</li>
                <li><input type="radio" name="price" value="3.50">$3.50</li>
                <li><input type="radio" name="price" value="4.00">$4.00</li>
            </ul>
            
            <label>Fuel Efficiency</label>
            <select name="efficiency">
                <option value="NULL">Select one</option>
                <option value="10">Terrible</option>
                <option value="20">Better</option>
                <option value="30">Okay</option>
                <option value="40">Great</option>
            </select>
            
            <div class="btm">
                <input type="submit" value="Calculate">
                <input type="reset" value="Reset">
            </div>
            
        </fieldset>
        
    </form>
    

<?php 
    
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if(empty($_POST['name'])) {
  
        echo '<h3 class="box2">Please fill out your name</h3>';
        
    }    
    
    if(empty($_POST['miles'])) {
  
        echo '<h3 class="box2">Please fill out the miles</h3>';
        
    }     elseif(is_numeric($_POST['miles'])) {
        
        
    }   else {
        
         echo '<h3 class="box2">The distance only can enter numbers!</h3>';
    }
    
    if(empty($_POST['hours'])) {
  
        echo '<h3 class="box2">Please fill out the hours</h3>';
        
    }  elseif(is_numeric($_POST['hours'])) {
        
    } else {
        
         echo '<h3 class="box2">The hours per day only can enter numbers!</h3>'; 
        
    }  if($_POST['hours'] > 24) {
        echo '<h3 class="box2">The hours per day must be less than 24!</h3>';
    }
    
    if(empty($_POST['price'])) {
    
        echo '<h3 class="box2">Please chooes the price</h3>';
        
    } 
        if($_POST['efficiency'] == 'NULL') {
 
        echo '<h3 class="box2">Please chooes the efficiency</h3>';
        
    } 

      elseif(isset($_POST['miles'],
                 $_POST['name'],
                 $_POST['hours']) && 
            is_numeric($_POST['miles']) &&
            is_numeric($_POST['hours']) &&
            ctype_graph($_POST['name'])
            ) {
        $name = $_POST['name'];
        $hours = $_POST['hours'];
        $miles = $_POST['miles'];
        $price = $_POST['price'];
        $efficiency = $_POST['efficiency'];
            
        $cost = $miles / $efficiency * $price;
        $cost_f = number_format($cost, 2);
        $day = $miles / ($hours * 65);
        $day_f = ceil($day);
        $totalhours = $day * $hours;
        $totalhours_f = ceil($totalhours);
      ?>
    <div class="box1">
        <?php
        echo '<h2>Calculator Results</h2>';
        echo '<p>'.$name.', you will be driving <strong>'.$miles.' miles.</strong></p>';
        echo '<p>Your vehicle has an efficiency rating of <strong>'.$efficiency.' miles per gallon.</strong></p>';
        echo '<p>Your total cost for gas will be <strong>$'.$cost_f.' dollars.</strong></p>';
        echo '<p>You will be driving a total of <strong>'.$totalhours_f.' hours equating to '.$day_f.' days.</strong></p>';
    }
    
}

    
?>
            </div>
</body>
</html>

