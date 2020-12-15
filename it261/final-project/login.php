<?php

include('server.php');
include('includes/header-fp-home.php');

?>
<div class="login">
<h2>Login!</h2>
</div>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<fieldset>

<label>Username</label>
<input type="text" name="UserName" value="<?php 
if(isset($_POST['UserName'])) echo $_POST['UserName']; ?>">

<label>Password</label>
<input type="password" name="Password">
<?php
    include('includes/errors-fp.php');
    ?>

<button type="submit" class="btn" name="login_user">Login</button>

<button type="button" onclick="window.location.href = '<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>' ">RESET</button>

</fieldset>
    
    
</form>
<div class="login">
<p class="center">Not a member yet?  <a href="register.php">Sign Up!</a></p>
</div>
<?php

include('includes/footer-fp.php');

?>
