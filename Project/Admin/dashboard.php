<?php
session_start();
if(!isset($_SESSION['AdminLoginId'])){
	header("location: admin_login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="dash_style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<?php
require("connection.php");
$query1 = "select * from contact";
$result1 = mysqli_query($conn, $query1);

$query2 = "select * from register";
$result2 = mysqli_query($conn, $query2);

$query3 = "select * from shelter";
$result3 = mysqli_query($conn, $query3);

$query4 = "select * from doctor";
$result4 = mysqli_query($conn, $query4);
?>

<style type="text/css"> 

table{
   width: 60%;
   line-height: 60px;
   border: 1px;
   border-collapse: collapse; 
   margin:50px auto;
}

th{
   padding: 8px; 
   border: 1px solid #041E42; 
   text-align: center; 
   font-size: 18px;
}

td{  
  padding: 8px; 
   border: 1px solid #041E42; 
   text-align: center; 
   font-size: 14px;
}

tr:nth-of-type(even){
  background: #FFEBE2;
}

@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

table { 
      width: 100%;
   }

   /* Force table to not be like tables anymore */
table, thead, tbody, th, td, tr { 
      display: block; 
   }
   
   /* Hide table headers (but not display: none;, for accessibility) */
thead tr { 
      position: absolute;
      top: -9999px;
      left: -9999px;
   }
   
tr { border: 1px solid #ccc; }
   
td { 
      /* Behave  like a "row" */
      border: none;
      border-bottom: 1px solid #eee; 
      position: relative;
      padding-left: 50%; 
   }

td:before { 
      /* Now like a table header */
      position: absolute;
      /* Top/left values mimic padding */
      top: 6px;
      left: 6px;
      width: 50%; 
      padding-right: 10px; 
      white-space: nowrap;
      /* Label the data */
      content: attr(data-column);

      color: #000;
      font-weight: bold;
   }

}
</style>

<body>
<header>
		<div class="header">
			
					<h1>WELCOME TO ADMIN PANNEL </h1>	
						
		</div>
	
</header>

	<div class="wrapper" >
		
		<input type="checkbox" id="btn" hidden>
         	<label for="btn" class="menu-btn">
         	<i class="fas fa-bars"></i>
         	<i class="fas fa-times"></i>
         </label>
         

         <nav id="sidebar">
            <div class="title">
               Side Menu
            </div>
            <ul class="list-items">
               <li><a href="#"><i class="fas fa-home"></i>Dashboard</a></li>
               <li><a href="#doctor-section"><i class="fas fa-user-md"></i>Doctors</a></li>
               <li><a href="#shelter-section"><i class="fas fa-home"></i>Shelters</a></li>
               <li><a href="#contact-section"><i class="fas fa-envelope-open"></i>Contact Us</a></li>
               <li><a href="#user-section"><i class="fas fa-user"></i>Users</a></li>
               
               <li><form id="logout" action="" method= "POST">
					    <button id="logout" name="logout">LOG OUT</button>
				     </form></li>
               
               <!-- <div class="icons">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-github"></i></a>
                  <a href="#"><i class="fab fa-youtube"></i></a>
               </div> -->
            </ul>
         </nav>
      </div>

      <div class="box" style="padding-left: 18%; padding-top: 7%;">
         <button><?php $sql = "SELECT COUNT(ID) FROM register"; $result15= mysqli_query($conn, $sql); $rows = mysqli_fetch_array($result15); echo"$rows[0]";?><br>  User Count</button>
         <button><?php $sql = "SELECT COUNT(ID) FROM shelter WHERE applied='1'"; $result15= mysqli_query($conn, $sql); $rows = mysqli_fetch_array($result15); echo"$rows[0]";?><br>Shelter Count</button>
         <button><?php $sql = "SELECT COUNT(ID) FROM doctor WHERE applied='1'"; $result15= mysqli_query($conn, $sql); $rows = mysqli_fetch_array($result15); echo"$rows[0]";?><br>Doctor Count</button>
      </div>

      <br>

      <div class="doctor-section">
         <a name='doctor-section'></a>
         <table>
            <thead>
            <tr>
               <th colspan="7" bgcolor="#DDA0DD" style="color: white;"><h2>Doctor Details</h2></th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Doctor Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Available Time</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $dis=500;
                while($row = mysqli_fetch_assoc($result4)){?>
                <tr>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['a_time']; ?></td>
                    <?php $d=false; $d=$row['applied']; ?>
                     <td><form style="text-align: center;" method="post">

                     <input type="submit"  <?php if($d){?> style="visibility: hidden;" <?php } ?> name="<?php echo $row['ID']; ?>" value="Approve" style="background-color: #336600; border: hidden; border-radius: 5px; font-size: 1rem; margin: 3px; padding: 7px; color: white;" />
                     <input type="submit"  <?php if($row['disaprove']){?> style="visibility: hidden;"<?php }?> <?php if($d){?> style="visibility: hidden;"<?php } ?> name="<?php echo $dis.$row['ID']; ?>" value="Disapprove" style="background-color:#700000; opacity: 90%; border: hidden; border-radius: 5px; font-size: 1rem; margin: 3px; padding: 7px; color: white ;"/>
                     <?php
                     if($row['applied']){
                        $statement ="APPROVED";
                     }
                     else{
                        $statement="DISAPROVED";
                     }

                     if($row['disaprove']){
                        $statement="DISAPROVED";
                     }
                     ?>

                     <p   <?php if((!$row['disaprove']) && (!$row['applied'])){?> style="visibility: hidden;"<?php } ?>> <?php echo $statement ; ?></p>

                     </td>
                     </tr>
                   <?php } ?>
                </form>
            </tbody>
         </table>
      </div>

      <br><br><br>

      <div class="shelter-section" align="center">
         <a name='shelter-section'></a>
         
         <table>
            <thead>
            <tr>
               <th colspan="7" bgcolor="#DB7093" style="color: white;"><h2>Shelter Details</h2></th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Shelter Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Supervisor Name</th>
                <th>Phone Number</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
                while($row = mysqli_fetch_assoc($result3)){?>
                <tr>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['adress']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['s_name']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <?php $y=false; $y=$row['applied']; ?>
                     <td><form style="text-align: center;" method="post">

                     <input type="submit"  <?php if($y){?> style="visibility: hidden;" <?php } ?> name="<?php echo '600'.$row['ID']; ?>" value="Approve" style="background-color: #336600; border: hidden; border-radius: 5px; font-size: 1rem; margin: 3px; padding: 7px; color: white;" />
                     <input type="submit"  <?php if($row['disaprove']){?> style="visibility: hidden;"<?php }?> <?php if($y){?> style="visibility: hidden;"<?php } ?> name="<?php echo '700'.$row['ID']; ?>" value="Disapprove" style="background-color:#700000; opacity: 90%; border: hidden; border-radius: 5px; font-size: 1rem; margin: 3px; padding: 7px; color: white ;"/>
                     <?php
                     if($row['applied']){
                        $statement ="APPROVED";
                     }
                     else{
                        $statement="DISAPROVED";
                     }

                     if($row['disaprove']){
                        $statement="DISAPROVED";
                     }
                     ?>

                     <p   <?php if((!$row['disaprove']) && (!$row['applied'])){?> style="visibility: hidden;"<?php } ?>> <?php echo $statement ; ?></p>

                     </td>
                     </tr>
                   <?php } ?>
                </form>
            </tbody>
         </table>
      </div>

      <br><br><br>

      <div class="contact-section" align="center">
         <a name='contact-section'></a>
      	
      	<table>
        		<thead>
        		<tr>
        			<th colspan="5" bgcolor="#DDA0DD" style="color: white;"><h2>Contact Details</h2></th>
        		</tr>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Message</th>
            </tr>
        		</thead>
        		<tbody>
            <?php
                while($row = mysqli_fetch_assoc($result1)){?>
                <tr>
                	  <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['msg'] ?></td>
                    
                <tr>
            <?php } ?>
        		</tbody>
    		</table>
      </div>

      <br><br><br>

      <div class="user-section" align="center">
         <a name='user-section'></a>
      	
      	<table>
        		<thead>
        		<tr>
        			<th colspan="3" bgcolor="#DB7093" style="color: white;"><h2>User Details</h2></th>
        		</tr>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        		</thead>
        		<tbody>
            <?php
                while($row = mysqli_fetch_assoc($result2)){?>
                <tr>
                	  <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                <tr>
            <?php } ?>
        		</tbody>
    		</table>
      </div>

      <br><br><br>

      
<?php
if(isset($_POST['logout'])){
   session_destroy();
   header("location : admin_login.php");
}
?>

<?php
/*==============   Approval Doctor ======================*/
$sql6= "select * from doctor";
$result6 = mysqli_query($conn,$sql6);

while ($row=mysqli_fetch_array($result6)) {
$idd=$row["ID"]; //Approve
if(isset($_POST[$idd])){
$app = "update doctor set applied = 1, disaprove = 0 where ID = '$idd'" ;
$result7 =  mysqli_query($conn,$app);

if($result7){
echo "<script> alert('Approved')</script>";
}else{
echo "<script> alert('DisApproved')</script>";
}
}
}

/* ================  Disapproval Doctor ===================*/
$sql7= "select * from doctor";
$result8 = mysqli_query($conn,$sql7);

while ($row=mysqli_fetch_array($result8)) {
$idd1=$row["ID"]; //Approve
 //$idd1='500'.$idd1;
if(isset($_POST['500'.$idd1])){
$app2 = "update doctor set applied = 0, disaprove = 1 where ID = '$idd1'" ;
$result9 =  mysqli_query($conn,$app2);

if($result9){

echo "<script> alert('DisApproved')</script>";
}else{
echo "<script> alert('Approved')</script>";
}
}
}
?>

<?php
/*==============   Approval Shelter ======================*/
$sql8= "select * from shelter";
$resul11 = mysqli_query($conn,$sql8);

while ($row=mysqli_fetch_array($resul11)) {
$idd2=$row["ID"]; //Approve
if(isset($_POST['600'.$idd2])){
$app3 = "update shelter set applied = 1, disaprove = 0 where ID = '$idd2'" ;
$result12 =  mysqli_query($conn,$app3);

if($result12){
echo "<script> alert('Approved')</script>";
}else{
echo "<script> alert('DisApproved')</script>";
}
}
}

/* ================  Disapproval Shelter ===================*/
$sql9= "select * from shelter";
$result12 = mysqli_query($conn,$sql9);

while ($row=mysqli_fetch_array($result12)) {
$idd3=$row["ID"]; //Approve
 //$idd3='500'.$idd3;
if(isset($_POST['700'.$idd3])){
$app4 = "update shelter set applied = 0, disaprove = 1 where ID = '$idd3'" ;
$result13 =  mysqli_query($conn,$app4);

if($result13){

echo "<script> alert('DisApproved')</script>";
}else{
echo "<script> alert('Approved')</script>";
}
}
}
?>

</body>
</html>

