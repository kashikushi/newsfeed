<?php
$con=mysqli_connect("localhost","root","","dw_newsfeed");
// Check connection
define('USE_PCONNECT', 'false'); 
define('STORE_SESSIONS', 'mysql');
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

if (isset($_POST['submit']))
{
	if($_FILES['file']['type'] == 'application/pdf'
	   || ($_FILES['file']['type'] == 'image/jpeg')
		|| ($_FILES['file']['type'] == 'image/jpg')
		&& ($_FILES['file']['size'] < 2000000)
	   )
	{if ($_FILES['file']['error'] > 0)
	   
	   {
		   echo "return code: " .$_FILES['file']['error'];
	   }
		elseif (file_exists('../newsfeed/uploads/'.$_FILES['file']['name']))
		{
			echo "<script>alert('File already exist');</script>";
		}
		elseif(move_uploaded_file($_FILES['file']['tmp_name'], '../newsfeed/uploads/' .$_FILES['file']['name']))
		{
			$attachment = $_FILES['file']['name'];
			extract($_POST);
			$input = $_REQUEST['title'];
			$textarea = $_REQUEST['txtarea'];
			echo ($attachment);
			echo($input);
			echo($textarea);
			
			$query = "INSERT INTO `aslider1`(`aslider1_title`, `aslider1_desc`, `aslider1_img`) VALUES ('$input','$textarea','../newsfeed/uploads/$attachment')  ";
			
			$sql=mysqli_query($con,$query);
			if($sql)
			{
				echo "<script> alert('Successfully inserted');</script>";
			}
			else 
			{
				echo "<script> alert('There was a problem uploading $input and $textarea ');</script>";
			}
		}
		
	}
}
echo "<br> <a href='slider.php'> Go back </a> ";
//header( "refresh:0;url=forms.html")

?>