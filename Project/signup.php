<?php

include "connection.php";
if(!empty($_SESSION["id"])){
    header("Location: index.php");
  }

if(isset($_POST["submit"])){
  $uname= $_POST["username"];
  $email= $_POST["email"];
  $password= $_POST["password"];
  $confirmpassword = $_POST["password-again"]; 
  $duplicate = mysqli_query($conn, "SELECT * FROM register WHERE username= '$uname' OR email='$email' ");

    if(mysqli_num_rows($duplicate)>0){
      echo"<script> alert('Username or Email is already been used..!')</script>";
    }
    else{
      if($password == $confirmpassword){
        $query = "INSERT INTO register (ID, username, email, password) VALUES('','$uname','$email','$password')";
        mysqli_query($conn, $query);
        echo"<script> alert ('Registration Successful')</script>";
      }
      else{
        echo"<script>alert('Password Does Not Match')</script>";
      }
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Signup </title>
  <!-- CORE CSS-->
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">

<style type="text/css">
html,
body {
    height: 100%;
    background-color: #c2dde6;
}
html {
    display: table;
    margin: auto;
}
body {
    display: table-cell;
    vertical-align: middle;
}
.margin {
  margin: 0 !important;
}
</style>
  


</head>

<body>


  <div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
      <form class="login-form" action="" method="POST" autocomplete="OFF">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="../images/logo.png" alt="" class="responsive-img valign profile-image-login">
            <p class="center login-form-text" style="font-size: 70;">SignUp</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" type="text" class="validate" placeholder="Name" name="username">
            <label for="username" class="center-align"></label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-communication-email prefix"></i>
            <input id="email" type="email" class="validate" placeholder="Email" name="email">
            <label for="email" class="center-align"></label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password" class="validate" placeholder="Password" name="password">
            <label for="password"></label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password-again" type="password" placeholder="Re-Enter Password" name="password-again">
            <label for="password-again"></label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button type="submit" name="submit" class="btn waves-effect waves-light col s12">Register Now</button>
          </div>
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up">Already have an account? <a href="login.php">Login</a></p>
          </div>
        </div>
      </form>
    </div>
  </div>


  
   
</body>

</html>