<?php 
include "connection.php";
error_reporting(0);
if(isset($_POST["submit"])){

 
$name =   strip_tags($_POST['your-name']);
$email =   strip_tags($_POST['your-email']);
$number =   strip_tags($_POST['your-phone']);
$msg =   strip_tags($_POST['your-message']);
 
$sql = "INSERT INTO contact (name , email, phone, msg) VALUES ('$name', '$email', '$number', '$msg')";

if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Message Sent")</script>';
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