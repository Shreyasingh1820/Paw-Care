 <?php include("header.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Shelter Information</title>
    <link rel="stylesheet" type="text/css" href="sh_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<script type="text/javascript">
	function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

<style type="text/css">
    
.hero {
  width: 100%;
  height: 570px;
  background: rgb(50, 50, 50);
  background: url(bg5.jpeg) no-repeat 40% 20% fixed;
  background-size: 130%;
  overflow: hidden;
}

.hero input{
    margin-left: 500px ;
    margin-top: 350px;
    height: 70px;
    width: 500px;
    border-radius: 40px;
}
.hero input::placeholder{
    color: black;
    font-size: 20px;
    font-weight: lighter;
    text-align: center;
}

.hero button{
    margin-left: 670px ;
    margin-top: 3px;
    height: 50px;
    width: 150px;
    border-radius: 40px;
    color: black;
    font-size: 18px;
    font-weight: lighter;
}

@media (max-width: 1000px){
    .heading h1{
        text-align: center;
    }
}

@media (max-width: 828px){
    .heading h1{
        text-align: center;
    }
}

@media (max-width: 500px){
    .heading h1{
        text-align: center;
        font-size: 10px;
    }
    table{
        padding-top: 1500px;
    }
}

.heading h1 {
  position: absolute;
  /*top: 70%;
  left: 0;*/
  width: 100%;
  padding: .3em;
  font-size: 3em;
  font-weight: bold;
  color: #800080;
  text-align: center;
}

table{
    padding-top: 8%;
}

  th, td{
    padding: 20px;
    text-align: center;
    font-size: 20px;
    color: black;

    }

  .shelter-section a{
      font-size: 27px; 
      color: white;
  }


  tbody{
    background-color: #FFE4B5;
  }

  .new-btn button{
      background-image: linear-gradient(to bottom , brown, blue);, 
      tend: #21D4FD
      border: none; 
      padding: 15px 32px; 
      text-align: center; 
      text-decoration: none; 
      display: inline-block; 
      font-size: 16px; 
      border-radius: 15pt; 
      font-size: 20px;
}

.new-btn button a{
      color: white;
}
</style>

<body>
	<button class="open-button" onclick="openForm()">Add Your Shelter</button>

<!-- The form -->
<div class="form-popup" id="myForm">
  <form action="" method="POST" class="form-container">
    <h1>Enter Shelter Details</h1>

    <label for="name"><b>Shelter Name</b></label>
    <input type="text" placeholder="Shelter Name" name="name" required>

    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Address" name="address" required>

    <label for="city"><b>City</b></label>
    <input type="text" placeholder="City" name="city" required>

    <label for="sname"><b>Supervisor Name</b></label>
    <input type="text" placeholder="Supervisor Name" name="s_name" required>

    <label for="email"><b>Email</b></label>
    <input type="email" style="width: 100%; padding: 15px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;" placeholder="Enter Email" name="email" required>

    <label for="phone"><b>Mobile Number</b></label>
    <input type="text" placeholder="Enter Number" name="phone" maxlength="10" minlength="10" required>

    <button type="submit" class="btn" id="submit" name= "submit">Enter Info</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<?php 
include "connection.php";
error_reporting(0);
if(isset($_POST['submit'])){

 
$name =   $_POST['name'];
$address =   $_POST['address'];
$city =   $_POST['city'];
$sname =   $_POST['s_name'];
$email =   $_POST['email'];
$number =   $_POST['phone'];
 
$sql = "INSERT INTO shelter (name , adress, city, s_name, email, phone) VALUES ('$name', '$address', '$city', '$sname' , '$email', '$number')";

if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Your record will be added after review. Thank You !");</script>';
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);

$result = mysqli_query($conn, $sql);
if ($result) {
        echo '<script>alert("Data Sent")</script>';
    }
}

$query1 = "select * from shelter where applied = 1";
$result1 = mysqli_query($conn, $query1);
?>
    
    <div class="hero">
    </div>
    <div class="heading">
        <h1>OUR SHELTER COMMUNITY</h1>
    </div>

    <div class="shelter-section" align="center" style="overflow: auto"> 

        <table style="color: black; ">
            <thead>
            <tr bgcolor="#d35583">
                <th>Shelter Name</th>
                <th>Supervisor Name</th>
                <th>Address</th>
                <th>City</th>
                <th>Email</th>
                <th>Phone Number</th>
            </tr>

            </thead>
            <tbody>
            <?php
                while($row = mysqli_fetch_assoc($result1)){?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['s_name']; ?></td>
                    <td><?php echo $row['adress']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><?php echo $row['email']; ?></td>                    
                    <td><?php echo $row['phone']; ?></td>
                <tr>
            <?php } ?>
            </tbody>
        </table>
      </div>

</body>
</html>

