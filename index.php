<?php
header('Content-Type: text/html; charset=utf-8');
@session_start();
include("config.inc.php");
if (isset($_SESSION['login_true'])) 
{
echo '<meta http-equiv="refresh" content="0; url=./home.php" />';
exit();
}

function safe($value){ 
   return mysql_real_escape_string($value); 
} 

$txtUsername = safe($_POST['txtUsername']);
$txtPassword = md5(safe($_POST['txtPassword']));
if(isset($txtUsername) and isset($txtPassword)) {
if (safe($_POST["txtUsername"])) {
if(trim(safe($_POST["txtUsername"]) && (safe($_POST["txtPassword"]))) == "" ) 
{
echo("<script> alert('Please fill out all bracket !!'); window.location='index.php';</script>");
exit();	
}
$result = mysql_query("select User,Password from member where User='$txtUsername' and Password='$txtPassword' ");
$num = mysql_num_rows($result) ;
if($num <=0 ) 
{
echo("<script> alert('Username or Password incorrect !!'); window.location='index.php';</script>");

exit();	
}else{
$_SESSION['login_true'] = $txtUsername;
echo "<meta http-equiv='refresh' content='0 ;url=./home.php'>";
exit();	
}}}
mysql_close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="./logincss/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./logincss/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./logincss/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./logincss/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./logincss/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="./logincss/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./logincss/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./logincss/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="./logincss/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./logincss/css/util.css">
	<link rel="stylesheet" type="text/css" href="./logincss/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form"  method="post" action="index.php">
					<span class="login100-form-title p-b-10">
						Welcome
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter Username">
						<input class="input100" type="text" name="txtUsername">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter Password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="txtPassword">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					<div class="text-center p-t-30">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="register.php">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="./logincss/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="./logincss/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="./logincss/vendor/bootstrap/js/popper.js"></script>
	<script src="./logincss/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="./logincss/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="./logincss/vendor/daterangepicker/moment.min.js"></script>
	<script src="./logincss/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="./logincss/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="./logincss/js/main.js"></script>

</body>
</html>