<?php

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
if(safe($_POST["txtUsername"]))
{
if(trim(safe($_POST["txtUsername"]) && safe($_POST["txtPassword"]) && safe($_POST["txtConPassword"]) && safe($_POST["txtEmail"])) == "") 
{
							echo("<script> alert('กรุณากรอกข้อมูลให้ครบถ้วน'); window.location='register.php';</script>");
exit();	
}
if(safe($_POST["txtPassword"]) != safe($_POST["txtConPassword"])) 
{
						echo("<script> alert('คุณกรอกรหัสผ่านไม่ตรงกัน'); window.location='register.php';</script>");

exit();
}	
$us = safe($_POST['txtUsername']);
if(ereg('[^0-9A-Za-z]',$us))
{
					echo("<script> alert('ชื่อผู้ใช้งานต้องมีอักษร A-Z 0-9 เท่านั้น'); window.location='register.php';</script>");
exit();
}
$pass = safe($_POST['txtPassword']);
if(ereg('[^0-9A-Za-z]',$pass))
{
				echo("<script> alert('รหัสผ่านต้องมีอักษร A-Z 0-9 เท่านั้น'); window.location='register.php';</script>");
exit();
}
$strSQL = "SELECT * FROM member WHERE User = '".trim(safe($_POST['txtUsername']))."' ";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
if($objResult) 
{
		echo("<script> alert('ชื่อผู้ใช้งานนี้มีอยู่แล้วในระบบ'); window.location='register.php';</script>");
exit();
}else{	
$strSQL = "SELECT * FROM member WHERE email = '".trim(safe($_POST['txtEmail']))."' ";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
if($objResult) 
{
			echo("<script> alert('อีเมลล์นี้มีอยู่แล้วในระบบ!'); window.location='register.php';</script>");
exit();
}else{
$strSQL = "INSERT INTO member (User,Password,email) VALUES ('".safe($_POST["txtUsername"])."', 
'".md5(safe($_POST["txtPassword"]))."','".safe($_POST["txtEmail"])."')";
$objQuery = mysql_query($strSQL);
			echo("<script> alert('สมัครสมาชิกสำเร็จ!'); window.location='index.php';</script>");
exit();
}}}
mysql_close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V2</title>
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
				<form class="login100-form validate-form" method="post" action="register.php">
					<span class="login100-form-title p-b-26">
						Register
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="txtUsername">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="txtPassword">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

								<div class="wrap-input100 validate-input" data-validate="Enter Confirm password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="txtConPassword">
						<span class="focus-input100" data-placeholder="Confirm Password"></span>
					</div>

					
					
										<div class="wrap-input100 validate-input" data-validate="Enter Email">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="text" name="txtEmail">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Register
							</button>
						</div>
					</div>

					<div class="text-center p-t-30" >
						<span class="txt1">
							Go to Login page !!
						</span>

						<a class="txt2" href="index.php">
							Click
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