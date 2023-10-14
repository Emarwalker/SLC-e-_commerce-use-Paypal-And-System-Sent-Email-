<?php
#this is Login form page , if user is already logged in then we will not allow user to access this page by executing isset($_SESSION["uid"])
#if below statment return true then we will send user to their profile.php page
if (isset($_SESSION["uid"])) {
	header("location:profile.php");
}
//in action.php page if user click on "ready to checkout" button that time we will pass data in a form from action.php page
if (isset($_POST["login_user_with_product"])) {
	//this is product list array
	$product_list = $_POST["product_id"];
	//here we are converting array into json format because array cannot be store in cookie
	$json_e = json_encode($product_list);
	//here we are creating cookie and name of cookie is product_list
	setcookie("product_list",$json_e,strtotime("+1 day"),"/","","",TRUE);

}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="shortcut icon" type="image/x-icon" href="logo.png">
		<title>SELIAH-Celestial_Shop</title>
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
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="panel panel-primary" >
					<div class="panel-heading"style="background-color: #7B00CA;">แบบฟอร์มเข้าสู่ระบบลูกค้า</div>
					<div class="panel-body">
						<!--User Login Form-->
						<form onsubmit="return false" id="login">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" id="email" required/>
							<label for="email">Password</label>
							<input type="password" class="form-control" name="password" id="password" required/>
							<p><br/></p>
							<input type="submit" class="btn btn-success" style="float:right;" Value="Login">
							<!--If user dont have an account then he/she will click on create account button-->
							<div><a href="customer_registration.php?register=1">สร้างบัญชีใหม่?</a></div>						
						</form>
				</div>
				<div class="panel-footer"><div id="e_msg"></div></div>
			</div>
		</div>
		<div class="col-md-4 " style="  padding-bottom: 35%;"></div>
	</div>

	<footer class="panel-footer " style="background-color:#7B00CA; color: #FFFFFF; font-size: 123%;"  >

<!-- Footer Links -->
<div class="container text-center text-md-left mt-5">

  <!-- Grid row -->
  <div class="row mt-3">

	<!-- Grid column -->
	<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

	  <!-- Content -->
	  <h4 >ชื่อ บริษัท</h4>
	  <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
	  <p>SLC - SEILAH Celestial
	  มาดูบทสัมภาษณ์น้องๆที่จะไปลงแข่งรายการ The Lady War ROV tournament by MiXMAYA กันเถอะ เป็นกำลังใจให้น้องๆกันด้วยนะคะ
	  </p>

	</div>
	<!-- Grid column -->

	<!-- Grid column -->
	<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

	  <!-- Links -->
	  <h4>สินค้า</h4>
	  <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
	  <p>
		<a href="#!"><font color="#FFFFFF">สินค้ายอดฮิต</font></a>
	  </p>
	  <p>
		<a href="#!"><font color="#FFFFFF">สินค้าขายดี</font></a>
	  </p>
	  <p>
		<a href="#!"><font color="#FFFFFF">สินค้าใหม่</font></a>
	  </p>
	  <p>
		<a href="#!"><font color="#FFFFFF"></font></a>
	  </p>

	</div>
	<!-- Grid column -->

	<!-- Grid column -->
	<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

	  <!-- Links -->
	  <h4>Useful links</h4>
	  <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
	  <p>
		<a href="#!"><font color="#FFFFFF">Your Account</font></a>
	  </p>
	  <p>
		<a href="#!"><font color="#FFFFFF">Shipping </font></a>
	  </p>
	  <p>
		<a href="#!"><font color="#FFFFFF">Help</font></a>
	  </p>

	</div>
	<!-- Grid column -->

	<!-- Grid column -->
	<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

	  <!-- Links -->
	  <h4>ติดต่อเรา</h6>
	  <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
	  <p>
		<i class="fas fa-home mr-3"></i> SLC - SEILAH Celestial</p>
	  <p>
		<i class="fas fa-envelope mr-3"></i> seilahcelestial@gmail.com</p>
	  <p>
		<i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
	  <p>
		<i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

	</div>
	<!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 :
  <a href="">SELIAH-Celestial_Shop</a>
</div>
<!-- Copyright -->

</footer>
	
</body>
</html>






















