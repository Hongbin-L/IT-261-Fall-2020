<?php

$firstName = '';
$lastName = '';
$email = '';
//$phone = '';
$gender = '';
$wines = '';
$privacy = '';
$comments = '';
$tel = '';

$firstNameErr = '';
$lastNameErr = '';
$emailErr = '';
//$phoneErr = '';
$gendeErr = '';
$winesErr = '';
$privacyErr = '';
$commentsErr = '';
$telErr = '';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
     
    if(empty($_POST['firstName'])) {
    $firstNameErr = 'Please fill out your first name!';
    } else{
    $firstName = $_POST['firstName'];
    }
        
    if(empty($_POST['lastName'])) {
    $lastNameErr = 'Please fill out your last name!';
    } else{
    $lastName = $_POST['lastName'];
    }
        
    if(empty($_POST['email'])) {
    $emailErr = 'Please fill out your email!';
    } else{
    $email = $_POST['email'];
    }
        
    if(empty($_POST['tel'])) {
    $telErr = 'Please fill out your phone number!';
    } else{
    $tel = $_POST['tel'];
    }
        
    if(empty($_POST['gender'])) {
    $genderErr = 'Please check one!';
    } else{
    $gender = $_POST['gender'];
    }
        
        if($gender == 'male') {
            $male = 'checked';
        } elseif($gender == 'female'){
            $female = 'checked';
        }
        
    if(empty($_POST['wines'])) {
    $winesErr = 'Please check the wines!';
    } else{
    $wines = $_POST['wines'];
    }
        
    if(empty($_POST['comments'])) {
    $commentsErr = 'Please include your comments!';
    } else{
    $comments = $_POST['comments'];
    }
        
    if(empty($_POST['privacy'])) {
    $privacyErr = 'Please agree to our Privacy Rules!';
    } else{
    $privacy = $_POST['privacy'];
    }
        
function myWines() {
    $myReturn = '';
    if(!empty($_POST['wines'])) {
        $myReturn = implode(',', $_POST['wines']);
        
    } return $myReturn;
}   
        
if(empty($_POST['tel'])) {  // if empty, type in your number
$telErr = 'Your phone number please!';
} elseif(array_key_exists('tel', $_POST)){
if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['tel']))
{ // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
$telErr = 'Invalid format!';
} else{
$tel = $_POST['tel'];
}
}
        
    if(isset($_POST['firstName'],
            $_POST['lastName'],
            $_POST['gender'],
            $_POST['wines'],
            $_POST['comments'],
             $_POST['tel'],
            $_POST['privacy'])) {
        
        $to = 'liu01010303@gmail.com';
        $subject = 'Test Email' .date('m/d/y');
        $body = ''.$firstName.' has filled out your form  '.PHP_EOL.'';
        $body .= 'Email: '.$email.' '.PHP_EOL.'';
        $body .= 'Your phone number: '.$tel.' '.PHP_EOL.'';
        $body .= 'Your Wines : '.myWines().' '.PHP_EOL.'';
        $body .= 'Gender: '.$gender.' '.PHP_EOL.'';
        $body .= 'Comments: '.$comments.'';
        
        $headers = array(
        'From' =>'no-reply@purplestar.club',
        'Reply-to' => ' '.$email.'');
        
        mail($to, $subject, $body, $headers);
        header('Location: thx.php');
        
        
    }
        
    }
        
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>My Emailable form</title>
<style>
    form {
        width: 350px;
        margin: 0 auto;
    }
    
    input {
        margin-bottom: 10px;
    }
    
    input[tye=text],
    input[type=email],
    textarea {
        width: 100%;
        height: 30px;
    }
    
    textarea {
        height: 120px;
    }
    
    fieldste {
        color:#666;
        padding:10px 15px 10px 10px;
    }
    
    label {
        display: block;
        margin-bottom: 5px;
    }
    
    .box {
        width: 600px;
        margin: 20px auto;
        background: beige;
        padding: 20px;
        border: 1px solid green;
    }
    
    select {
        margin-bottom: 10px;
    }
    
    span {
        display: block;
        color: red;
        font-style: italic;
    }
    
    </style>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);   ?>" method="post">
    <fieldset>
        <label>First Name</label>
        <input type="text" name="firstName" value="<?php
        if(isset($_POST['firstName'])) echo htmlspecialchars($_POST['firstName']) ;  ?>">
        <span><?php echo $firstNameErr;  ?></span>
        
        <label>Last Name</label>
        <input type="text" name="lastName" value="<?php
        if(isset($_POST['lastName'])) echo htmlspecialchars($_POST['lastName']) ;  ?>">
        <span><?php echo $lastNameErr;  ?></span>
        
        <label>Email</label>
        <input type="email" name="email" value="<?php
        if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;  ?>">
        <span><?php echo $emailErr;  ?></span>
        
        <label>Telephone</label>
        <input type="tel" name="tel" placeholder="xxx-xxx-xxxx" value="<?php
        if(isset($_POST['tel'])) echo htmlspecialchars($_POST['tel']) ;  ?>">
        <span><?php echo $telErr;  ?></span>

        
        <label>Gender</label>
        <ul>
        <li><input type="radio" name="gender" value="female"
             <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked"'; ?>   
                   >Female</li>
        <li><input type="radio" name="gender" value="male"
             <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"'; ?>   
                   >Male</li>

        </ul>
         <span><?php echo $genderErr;  ?></span>
        
        
        <label>Favorite Wines</label>
        <ul>
        <li><input type="checkbox" name="wines[]" value="Cabernet"
             <?php if(isset($_POST['wines']) && $_POST['wines'] == 'Cabernet') echo 'checked="checked"'; ?>   
                   >Cabernet</li>
            <li><input type="checkbox" name="wines[]" value="Merlot"
             <?php if(isset($_POST['wines']) && $_POST['wines'] == 'Merlot') echo 'checked="checked"'; ?>   
                   >Merlot</li>
            <li><input type="checkbox" name="wines[]" value="Syrah"
             <?php if(isset($_POST['wines']) && $_POST['wines'] == 'Syrah') echo 'checked="checked"'; ?>   
                   >Syrah</li>
            <li><input type="checkbox" name="wines[]" value="Malbec"
             <?php if(isset($_POST['wines']) && $_POST['wines'] == 'Malbec') echo 'checked="checked"'; ?>   
                   >Malbec</li>
            <li><input type="checkbox" name="wines[]" value="Zinfandel"
             <?php if(isset($_POST['wines']) && $_POST['wines'] == 'Zinfandel') echo 'checked="checked"'; ?>   
                   >Zinfandel</li>
            </ul>
        <span><?php echo $winesErr;  ?></span>
        
        <label>Comments</label>
        <textarea name="comments"><?php
        if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;  ?></textarea>
        <span><?php echo $commentsErr;  ?></span>
        
        <input type="radio" name="privacy" value="<?php 
        if(isset($_POST['privacy'])) echo htmlspecialchars($_POST['privacy']); ?>">
        I agree to you Privacy Policy
        <span><?php echo $privacyErr;  ?></span>
        
        <input type="submit" value="Send it!">
        <p><a href="">Reset me!</a></p>
            </fieldset>
    
    </form>
   
</body>
</html>