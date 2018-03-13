<?php
$con=mysqli_connect("localhost","root","","dw_education");
// Check connection
define('USE_PCONNECT', 'false'); 
define('STORE_SESSIONS', 'mysql');
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }



if(isset($_POST['submit']))
 {
 extract($_POST);

$username = $_REQUEST['uname'];
$userpassword = $_REQUEST['password'];
	 
	 
$query="SELECT * FROM `Sign_Up_Data_Table` WHERE `user_name` = '$username' and `password` ='$userpassword' ";
    
	 
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)) 
	{
		//$_SESSION['auth']=true;
		$_SESSION['ID'] =$row['user_id'];
		$admin_id=$_SESSION['ID'];
		$name=$row['user_name'];
	}
}
echo($name);
echo "<a href='logout.php'> Logout  </a>";
 ?>
 
    
	


