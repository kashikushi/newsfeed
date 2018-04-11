<?php
$con=mysqli_connect("localhost","root","","dw_newsfeed");
// Check connection
define('USE_PCONNECT', 'false'); 
define('STORE_SESSIONS', 'mysql');
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

session_start ();

if(isset($_POST['submit']))
 {
 extract($_POST);

$useremail = $_REQUEST['email'];
$userpassword = $_REQUEST['password'];
	 

$query="SELECT * FROM `register` WHERE `email` = '$useremail' and `password` ='$userpassword' ";
    
	 
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)) 
	{
		//$_SESSION['auth']=true;
		$_SESSION['ID'] =$row['admin_id'];
		$admin_id=$_SESSION['ID'];
	
	}
}

header("location:adminpanel.php");
 ?>
 
   
    
	


