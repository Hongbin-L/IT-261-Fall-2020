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
        
        
        <label>Favorite Car Brand</label>
        <ul>
        <li><input type="checkbox" name="cars[]" value="Honda"
             <?php if(isset($_POST['cars']) && $_POST['cars'] == 'Honda') echo 'checked="checked"'; ?>   
                   >Honda</li>
            <li><input type="checkbox" name="cars[]" value="Toyota"
             <?php if(isset($_POST['cars']) && $_POST['cars'] == 'Toyota') echo 'checked="checked"'; ?>   
                   >Toyota</li>
            <li><input type="checkbox" name="cars[]" value="BMW"
             <?php if(isset($_POST['cars']) && $_POST['cars'] == 'BMW') echo 'checked="checked"'; ?>   
                   >BMW</li>
            <li><input type="checkbox" name="cars[]" value="Audi"
             <?php if(isset($_POST['cars']) && $_POST['cars'] == 'Audi') echo 'checked="checked"'; ?>   
                   >Audi</li>
            <li><input type="checkbox" name="cars[]" value="Ford"
             <?php if(isset($_POST['cars']) && $_POST['cars'] == 'Ford') echo 'checked="checked"'; ?>   
                   >Ford</li>
            </ul>
        <span><?php echo $carsErr;  ?></span>

        
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