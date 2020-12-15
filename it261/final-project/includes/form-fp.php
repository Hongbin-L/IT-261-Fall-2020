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
        
<!--
        <label>Telephone</label>
        <input type="tel" name="tel" placeholder="xxx-xxx-xxxx" value="<?php
        if(isset($_POST['tel'])) echo htmlspecialchars($_POST['tel']) ;  ?>">
        <span><?php echo $telErr;  ?></span>
-->

        
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
        
        
        <label>Favorite Stars</label>
        <ul>
        <li><input type="checkbox" name="Stars[]" value="Dubhe"
             <?php if(isset($_POST['Stars']) && $_POST['Stars'] == 'Dubhe') echo 'checked="checked"'; ?>   
                   >Dubhe</li>
            <li><input type="checkbox" name="Stars[]" value="Merak"
             <?php if(isset($_POST['Stars']) && $_POST['Stars'] == 'Merak') echo 'checked="checked"'; ?>   
                   >Merak</li>
            <li><input type="checkbox" name="Stars[]" value="Phecda"
             <?php if(isset($_POST['Stars']) && $_POST['Stars'] == 'Phecda') echo 'checked="checked"'; ?>   
                   >Phecda</li>
            <li><input type="checkbox" name="Stars[]" value="Megrez"
             <?php if(isset($_POST['Stars']) && $_POST['Stars'] == 'Megrez') echo 'checked="checked"'; ?>   
                   >Megrez</li>
            <li><input type="checkbox" name="Stars[]" value="Alioth"
             <?php if(isset($_POST['Stars']) && $_POST['Stars'] == 'Alioth') echo 'checked="checked"'; ?>   
                   >Alioth</li>
            <li><input type="checkbox" name="Stars[]" value="Mizar"
             <?php if(isset($_POST['Stars']) && $_POST['Stars'] == 'Mizar') echo 'checked="checked"'; ?>   
                   >Mizar</li>
            <li><input type="checkbox" name="Stars[]" value="Alkaid"
             <?php if(isset($_POST['Stars']) && $_POST['Stars'] == 'Alkaid') echo 'checked="checked"'; ?>   
                   >Alkaid</li>
            </ul>
        <span><?php echo $starsErr;  ?></span>

        
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