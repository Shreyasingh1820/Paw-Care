<!DOCTYPE html> 
<html> 
<head> 
    <title> 
        Registration | Borage
    </title> 
    <link rel="stylesheet" type="text/css"
                    href="C:/Users/shrey/OneDrive/Desktop/Project/loginstyle.css"> 
</head> 
  
<body> 
    <div class="header"> 
        <h2>Sign Up</h2> 
    </div> 
       
    <form method="post" action="../php/register.php"> 
   
        <?php include('../php/errors.php'); ?> 
   
        <div class="input-group"> 
            <label>Enter Username</label> 
            <input type="text" name="username"  pattern="(?=.*[a-z])(?=.*[A-Z]).{8,}" title=" Username should  only contain letters and at least 8 or more characters"
                value="<?php echo $username; ?>"> 
        </div> 
        <div class="input-group"> 
            <label>Email</label> 
            <input type="email" name="email"
                value="<?php echo $email; ?>"> 
        </div> 
        <div class="input-group"> 
            <label>Enter Password</label> 
            <input type="password" name="password_1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters and first character should be uppercase"> 
        </div> 
        <div class="input-group"> 
            <label>Confirm password</label> 
            <input type="password" name="password_2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"> 
        </div> 
        <div class="input-group"> 
            <button type="submit" class="btn"
                                name="reg_user"> 
                Sign Up 
            </button> 
        </div> 
        <p> 
            Already having an account? 
            <a href="C:/Users/shrey/OneDrive/Desktop/Project/login.html"> 
                Login
            </a> 
        </p> 
    </form> 
</body> 
</html>

