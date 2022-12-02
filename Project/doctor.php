<?php include("header.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Doctor Information</title>
</head>
<link rel="stylesheet" type="text/css" href="../Project/sh_style.css">

<style type="text/css">

.hero {
  width: 100%;
  height: 570px;
  background: rgb(50, 50, 50);
  background: url(bg5.jpeg) no-repeat 25% 20% fixed;
  background-size: 130%;
  overflow: hidden;
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
  color: #4b0082;
  text-align: center;
}

.doctor-section table{
    padding-top: 8%;
}


  .doctor-section th, td{
    padding: 20px;
    text-align: center;
    font-size: 20px;
    color: black;

    }

  .doctor-section a{
      font-size: 27px; 
      color: white;
  }


  .doctor-section tbody{
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

<script type="text/javascript">
	function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

</script>
<body>
	<button class="open-button" onclick="openForm()">Enter As Doctor</button>

<!-- The form -->
<div class="form-popup" id="myForm">
  <form action=""  method="POST" class="form-container">
    <h1>Enter Doctor Details</h1>

    <label for="name"><b>Doctor Name</b></label>
    <input type="text" placeholder="Doctor Name" name="name" required>

    <label for="address"><b>Clinic Address</b></label>
    <input type="text" placeholder="Address" name="address" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="number"><b>Mobile Number</b></label>
    <input type="text" placeholder="Enter Number" name="mob_num" maxlength="10" minlength="10" required>

    <label for="time"><b>Available Time</b></label>
    <input type="text" placeholder="Available Time" name="time" required>

    <button type="submit" class="btn" id="submit" name="submit">Enter Info</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<?php 
include "connection.php";
error_reporting(0);
if(isset($_POST['submit'])){

 
$name =   $_POST['name'];
$address =   $_POST['address'];
$email =   $_POST['email'];
$number =   $_POST['mob_num'];
$time =   $_POST['time'];
 
$sql = "INSERT INTO doctor (name , address, email, phone , a_time) VALUES ('$name', '$address' , '$email', '$number' , '$time')";

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


$query1 = "select * from doctor where applied = 1";
$result1 = mysqli_query($conn, $query1);
?>

<?php 
if(isset($_POST['filter_btn'])) {
  $value_filter = $_POST['filter_value'];
  $query = "SELECT * FROM doctor WHERE applied=1 CONCAT(name, address, phone, email, a_time) LIKE '%$value_filter%' ";
  $query_run = mysqli_query($conn, $query);

  if(mysqli_num_rows(query_run)>0){
        while($row = mysli_fetch_array($query_run)){
          ?>

            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['a_time']; ?></td>  
            <tr>

          <?php  
        }
  }
  else{
    echo '<script>alert("No Record Found..!")</script>';
  }
}

?>

    <div class="hero">
    
    </div>
    <div class="heading">
        <h1>OUR DOCTOR COMMUNITY</h1>
    </div>

    <div class="doctor-section" align="center">
         <a name='doctor-section'></a>
        
        <table style="color: black;">
            <thead>
            <tr bgcolor="#DC143C">
                <th>Doctor Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Available Time</th>
            </tr>
            
            </thead>
            <tbody>
            <?php
                while($row = mysqli_fetch_assoc($result1)){?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['a_time']; ?></td>  
                <tr>
            <?php } ?>
            </tbody>
        </table>
      </div>

</body>
</html>