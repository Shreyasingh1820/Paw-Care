<?php 
include "connection.php";
//error_reporting(0);
if(isset($_POST["submit"])){

 
$name =   $_POST['name'];
$email =   $_POST['email'];
$sname =   $_POST['s_name'];
$address =   $_POST['address'];
$number =   $_POST['phone'];
 
$sql = "INSERT INTO shelter (name , email, phone, sname, address) VALUES ('$name', '$email', '$number', '$sname', '$address')";

if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);

$result = mysqli_query($conn, $sql);
if ($result) {
        echo '<script>alert("Message Sent")</script>';
    }
}
?>
