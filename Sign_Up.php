<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Sign Up</title>

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
<div class="box">
<div class="msg">Sign up for a free account</div>

<!--form start-->

<form action="data_sign_up.php" method="POST">
<input type="text" class="email" name="fname" placeholder="First Name" required="" value="">
<input type="text" class="email" name="lname" placeholder="Last Name" required="" value="">
<input type="email" class="email" name="email" placeholder="Email Address" required="" value="">
<input type="text" class="email" name="uname" placeholder="User Name" required="" value="">
<input type="password" class="email" name="password" minlength="6" placeholder="Password" required="">
<input type="date" class="email" name="dob" placeholder="Date of Birth" required="">
<input type="text" class="email" name="gen" placeholder="Gender" required="">
<input type="tel" class="email" name="tel" placeholder="Telephone" required="">
<input type="text" class="email" name="quali" placeholder="Qualification" required="">
<textarea name="haddress" class="email" id="tbox" cols="30" rows="10" placeholder="Type your address here"></textarea>

<!--form ends-->

<div class="form-group">
<input type="checkbox" name="terms_of_service" id="terms" class="terms">
<label for="terms">I've read and agree to the <a href="#">terms of service</a>.</label>
</div>
<button type="submit" name="submit" class="btn3 btn btn-danger">Click to Sign Up</button>
<div class="m-t-25 m-b--5 align-center form-group">
<a href="Login.php" class="already">You already have a membership?</a>
</div>
</form>
</div>


<!-- footer -->
<?php 

include("footer.html");

?>
			<!-- //footer -->
</body>
</html>
