


<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Calculator</title>
    
    <style>
        
        form {
            width: 500px;
            margin: 0 auto;
            background: beige;

        }
        
        h1 {
            text-align: center;
        }
        
        h2 {
            text-align: center;
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
        
    </style>


</head>

<body>
    
    <h1>Our Calculator</h1>
        
    <form action="" method="post">
            
        <fieldset>
            
            <label>How many miles will you be driving</label>
            <input type="text" name="miles">
            
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
    
    if(empty($_POST['miles'])) {
        
        echo '<h2>Error!</h2>';
        echo '<p>Please enter a valid distance, price per gallon and fuel efficiency</p>';
        
    }      elseif(empty($_POST['price'])) {
        
        echo '<h2>Error!</h2>';
        echo '<p>Please enter a valid distance, price per gallon and fuel efficiency</p>';
        
    }    elseif($_POST['efficiency'] == 'NULL') {
        
        echo '<h2>Error!</h2>';
        echo '<p>Please enter a valid distance, price per gallon and fuel efficiency</p>';
        
    }  

     elseif(isset($_POST['miles']) && 
            is_numeric($_POST['miles'])
            ) {
        
        $miles = $_POST['miles'];
        $price = $_POST['price'];
        $efficiency = $_POST['efficiency'];
            
        $cost = $miles / $efficiency * $price;
        $cost_f = number_format($cost, 2);
         
        echo '<p>You have driven '.$miles.' miles.</p>';
        echo '<p>Your vehicle has an efficiency rating of '.$efficiency.' miles per gallon</p>';
        echo '<p>Your total cost for gas will be $'.$cost_f.' dollars</p>';
    }
    
}

    
?>

    
</body>
</html>