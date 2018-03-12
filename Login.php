<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" href="css/signup.css">

</head>
<body>

<!--header-->
<?php 

include("header.html");

?>
		<!--//header-->

<div class="logo">
<a href="index.php"><strong>K</strong>demy</a>
</div>

<form method="post" action="success_sign_up.php">
<div class="box">
<h1>Login</h1>
<!--form starts-->
<input type="text" name="uname" placeholder="Username" class="email" />
<input type="password" name="password" placeholder="Password" class="email" />
<!--form ends-->

<button type="submit" class="btn2 btn btn-primary" name="submit"> Login </button>
<div class="forget"><p>Forgot your password? <u style="color:#f1c40f;">Click Here!</u></p></div>
<a href="Sign_Up.php" class="btn3 btn btn-info"> Sign up for free account </a>


</div>
</form>



<!-- footer -->
<?php 

include("footer.html");

?>
			<!-- //footer -->
</body>
</html>
