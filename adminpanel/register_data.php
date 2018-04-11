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

$userfulname = $_REQUEST['fulname'];
$useraddress = $_REQUEST['address'];
$useremail = $_REQUEST['email'];
$usercity = $_REQUEST['town'];
$usergen = $_REQUEST['gender'];
$useruname = $_REQUEST['uname'];
$userpassword = $_REQUEST['Password'];
$userconfirmedpass = $_REQUEST['Re-type-password'];
$userquali = $_REQUEST['quali'];
$userhaddress = $_REQUEST['haddress'];


	 
$query="INSERT INTO `register`(`fullname`, `address`, `email`, `city`, `gender`, `username`, `password`, `confirmed_password`) VALUES ('$userfulname','$useraddress','$useremail','$usercity','$usergen','$useruname','$userpassword','$userconfirmedpass')";

if ($con->query($query) === TRUE) {
header("location:adminpanel/login.php");
}
else {
echo "Error: " . $query . "<br>" . $con->error;
}
echo "<script> alert('Record Has been Recorded successfully.');</script>";
/*$con->close();*/
 }

 ?>
