<?php
if (isset($_GET["register"])) {
	
	?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>SELIAH-Celestial_Shop</title>
		<link rel="shortcut icon" type="image/x-icon" href="logo.png">
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style>
		body {
		background-image: url('img_fontsEnd/background-photo-mobile-devices.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;  
		background-size: cover;
		}
		</style>
	</head>
	
<body> 
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top" style="background-color: #7B00CA;">
		<div class="container-fluid">	
			<div class="navbar-header">
			<a href="index.php" class="navbar-brand"><img src="logo.png" alt="" width="35" height="35"></a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-inbox"></span><font color="#FFFFFF">เสื้อSLC</a></font></li>
				<li><a href="https://www.facebook.com/SEILAH.Celestial/"><span class=""></span><font color="#FFFFFF">สอบถามเรา</a></font></li>
				<li><a href="contact.php"><span class=""></span><font color="#FFFFFF">ที่อยู่บริษัทSLC</a></font></li>
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary" >
					<div class="panel-heading" style="background-color: #7B00CA;">สมัครสมาชิก</div>
					<div class="panel-body">
					
					<form id="signup_form" onsubmit="return false">
						<div class="row">
							<div class="col-md-6">
								<label for="f_name"><span class="glyphicon glyphicon-user"></span>ชื่อจริง (อังกฤษ)</label>
								<input type="text" id="f_name" name="f_name" class="form-control" placeholder="Firstname" Maxlength="30">
							</div>
							<div class="col-md-6">
								<label for="f_name">นามสกุล (อังกฤษ)</label>
								<input type="text" id="l_name" name="l_name"class="form-control" placeholder="Surname" Maxlength="30">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="email"><span class="glyphicon glyphicon-envelope"></span>Email</label>
								<input type="text" id="email" name="email"class="form-control" placeholder=" Email" Maxlength="40">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="password"><span class="glyphicon glyphicon-lock"></span>รหัสผ่าน</label>
								<input type="password"  id="myInput1" id="password" name="password"class="form-control" placeholder="Password" Maxlength="20" >
								<input type="checkbox" onclick="myFunction1()">Show Password
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="repassword"><span class="glyphicon glyphicon-lock"></span>ยื่นยันรหัสผ่านอีกครั้ง</label>
								<input type="password"  id="myInput2" id="repassword" name="repassword"class="form-control" placeholder="confirm Password" Maxlength="20">
								<input type="checkbox" onclick="myFunction2()">Show Password
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="mobile"><span class="glyphicon glyphicon-earphone"></span>เบอร์โทรศัพท์</label>
								<input type="tel" id="mobile" name="mobile"class="form-control" placeholder="Phone number" Maxlength="10">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address2"><span class="glyphicon glyphicon-earphone"></span>เบอร์โทรศัพท์สำรอง</label>
								<input type="text" id="address2" name="address2"class="form-control" placeholder="Backup Phone number" Maxlength="30">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address1"><span class="glyphicon glyphicon-home"></span>ที่อยู่ของคุณ</label>
								<input type="text" id="address1" name="address1"class="form-control" placeholder="Phone number" Maxlength="75">
							</div>
						</div>
						<p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input style="width:100%;" value="Sign Up" type="submit" name="signup_button"class="btn btn-success btn-lg">
							</div>
						</div>
						
					</div>
					</form>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
		<script>
		function myFunction1() {
		  var x = document.getElementById("myInput1");
		  if (x.type === "password") {
			x.type = "text";
		  } else {
			x.type = "password";
		  }
		}
		</script>
		<script>
		function myFunction2() {
		  var x = document.getElementById("myInput2");
		  if (x.type === "password") {
			x.type = "text";
		  } else {
			x.type = "password";
		  }
		}
		</script>
</body>



</html>
	<?php
}
?>






















