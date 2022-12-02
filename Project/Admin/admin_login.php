<?php
require("connection.php");

if(isset($_POST['submit'])){
    $adname= $_POST['adname'];
    $adpass= $_POST['adpass'];
    $query ="SELECT * FROM admin WHERE ad_name= '$adname' AND ad_pass='$adpass'";

    $result= mysqli_query($conn, $query);
    //$row =mysqli_fetch_query($result);
    //echo $row;

    if (mysqli_num_rows($result)==1) {
        //if($adpass == $row["ad_pass"]){
            session_start();
            $_SESSION['AdminLoginId']= $_POST['adname'];
            header("location: dashboard.php");
        //}     
    }
    else{
        echo "<script>alert('Incorrect Username or Password');</script>";
    }
}

?>

<html>
<head>
<title>Admin Login</title>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="admin_style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body>

<div class="login-form">
    <h2>ADMIN LOGIN</h2>
    <form method="POST" action="">
        <div class="input-field">
            <i class="bi bi-person-circle"></i>
            <input type="text" placeholder="Username" name="adname">
        </div>
        <div class="input-field">
            <i class="bi bi-shield-lock"></i>
            <input type="password" placeholder="Password" name="adpass">
        </div>
        
        <button type="submit" id="submit"name="submit">Sign In</button>

    </form>
</div>

</body>
</html>