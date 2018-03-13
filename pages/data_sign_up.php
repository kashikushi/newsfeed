<?php

$con=mysqli_connect("localhost","root","","dw_newsfeed");

// Check connection
define('USE_PCONNECT', 'false'); 
define('STORE_SESSIONS', 'mysql');
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

if(isset($_POST['submit']))
 {
 extract($_POST);

$userfname = $_REQUEST['fname'];
$userlname = $_REQUEST['lname'];
$useremail = $_REQUEST['email'];
$useruname = $_REQUEST['uname'];
$userpassword = $_REQUEST['password'];
$userdob = $_REQUEST['dob'];
$usergen = $_REQUEST['gen'];
$usertel = $_REQUEST['tel'];
$userquali = $_REQUEST['quali'];
$userhaddress = $_REQUEST['haddress'];



	 
$query="INSERT INTO `Sign_Up_Data_Table`(`f_name`, `l_name`, `email`, `user_name`, `password`, `user_dob`, `gender`, `telephone`, `qualification`, `home_address`) VALUES ('$userfname','$userlname','$useremail','$useruname','$userpassword','$userdob','$usergen','$usertel','$userquali','$userhaddress')";

if ($con->query($query) === TRUE) {
header("location:Login.php");
}
else {
echo "Error: " . $query . "<br>" . $con->error;
}
echo "<script> alert('Record Has been Recorded successfully.');</script>";
/*$con->close();*/
 }

 ?>
