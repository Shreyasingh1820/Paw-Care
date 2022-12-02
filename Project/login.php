<?php
include "connection.php";

  if(!empty($_SESSION["id"])){
    header("Location: index.php");
  }
  
  if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM register WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn,$sql);
    //$row = mysqli_fetch_query($result);

      if(mysqli_num_rows($result) === 1){
          if($password == $_POST["password"]){
              $_SESSION["login"]= true;
              $_SESSION["id"]= $_POST["id"];
              header("Location: index.php");
          }
          else{
            echo"<script>alert('Wrong Password');</script>";
          }
      }
      else{
        echo"<script> alert('User Not Registered');</script>";
      }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
  <!-- CORE CSS-->
</head>


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
  

<body>


  <div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
      <form class="login-form" method="POST" action="">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="../images/logo.png" alt="" class="responsive-img valign profile-image-login">
            <p class="center login-form-text" style="font-size: 70;">Login Form</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input class="validate" id="email" type="email" placeholder="Email" name="email">
            <label for="email" data-error="wrong" data-success="right" class="center-align"></label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password" placeholder="Password" name="password">
            <label for="password"></label>
          </div>
        </div>
        
        <div class="row">
          <div class="input-field col s12">
            <button  class="btn waves-effect waves-light col s12" type="submit" id="submit" name="submit">Login</button>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="signup.php">Register Now!</a></p>
          

      </form>
    </div>
  </div>


  
  
</body>

</html>
