<?php

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
		</style>
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top "style="background-color: #7B00CA;">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand"><img src="logo.png" alt="" width="30" height="30"></a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span><font color="#FFFFFF">สินค้าของเรา</a></font></li>
				<li><a href="index.php"><span class=""></span><font color="#FFFFFF">สอบถามเรา</a></font></li>
				<li><a href="contact.php"><span class=""></span><font color="#FFFFFF">ติดต่อเรา</a></font></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span><font color="#FFFFFF">ตะกร้าสินค้า </font><span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">เลขที่สินค้า</div>
									<div class="col-md-3">รูปสินค้า</div>
									<div class="col-md-3">ชื่อสินค้า</div>
									<div class="col-md-3">ราคาสินค้า</div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								<!--<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								</div>-->
								<!--</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>-->
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><font color="#FFFFFF">SignIn</font></a>
					<ul class="dropdown-menu" style="background-color: #7B00CA;">
						<div style="width:300px; height: 200px;">
							<div class="panel panel-primary" style="background-color: #7B00CA;">
								<div class="panel-heading" style="background-color: #7B00CA;">Login</div>
								<div class="panel-heading" style="background-color: #7B00CA;">
									<form onsubmit="return false" id="login">
										<label for="email">Email</label>
										<input type="email" class="form-control" name="email" id="email" required/>
										<label for="email">Password</label>
										<input type="password" class="form-control" name="password" id="password" required/>
										<p><br/></p>
										<a href="customer_registration.php?register=1" style="color:white; list-style:none;">สมัครสมาชิก</a>
										<button type="submit" class="btn btn-success" style="float:right;">ตกลง</button>										
									
								</div>
								<div class="panel-footer" style="background-color: #7B00CA;" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>
				</form>
			</ul>
		</div>
	</div>
</div>

		<div style="margin:80px;"></div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d242.15840758430053!2d100.58791062396926!3d13.806910853577689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29ecd58d574f7%3A0x877ba32c7fb01e0e!2z4Lia4LiI4LiBLuC4iuC4seC4ouC4o-C4uOC5iOC4h-C5gOC4reC5h-C4meC5gOC4leC4reC4o-C5jOC5hOC4nuC4o-C4quC5jA!5e0!3m2!1sth!2sth!4v1595171768156!5m2!1sth!2sth" width="100%" height="800px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
<div style="margin: 30px;"></div>

	<footer class="panel-footer" style="background-color:#7B00CA; color: #FFFFFF; font-size: 123%;">
	<!-- Footer Links -->
	<div class="container text-center text-md-left mt-5">
	<div class="row mt-3">
		<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
			<!-- Content -->
			<h4 >ชื่อ บริษัท</h4>
			<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
			<p>SLC - SEILAH Celestial
			มาดูบทสัมภาษณ์น้องๆที่จะไปลงแข่งรายการ The Lady War ROV tournament by MiXMAYA กันเถอะ เป็นกำลังใจให้น้องๆกันด้วยนะคะ
			</p>
		</div>
		<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
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
		<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
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
		<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
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
	</div>
	</div>
	<div class="footer-copyright text-center py-3">© 2020 :
	<a href="">SELIAH-Celestial_Shop</a>
	</div>
	</footer>
	<!-- Footer -->
</body>
</html>
</body>
</html>