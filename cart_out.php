<?php
	
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
		<link rel="stylesheet" type="text/css" href="style.css"/>
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
				<li><a href="index.php"><span class="glyphicon glyphicon-inbox"></span><font color="#FFFFFF">เสื้อSLC</a></font></li>
				<li><a href="https://www.facebook.com/SEILAH.Celestial/"><span class=""></span><font color="#FFFFFF">สอบถามเรา</a></font></li>
				<li><a href="contact.php"><span class=""></span><font color="#FFFFFF">ที่อยู่บริษัทSLC</a></font></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span><font color="#FFFFFF">ตะกร้าสินค้า </font><span class="badge">  0</span></a>
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
					</div>
				</li>-->
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span></a>
				</li>
			</ul>
		</div>
	</div>
</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="cart_msg">
				<!--Cart Message--> 
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading" style="background-color: #7B00CA;">ตะกร้าชำระเงิน</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-2 col-xs-2"><b>แก้ไข</b></div>
							<div class="col-md-2 col-xs-2"><b>รูปสินค้า</b></div>
							<div class="col-md-2 col-xs-2"><b>ชื่อสินค้า</b></div>
							<div class="col-md-2 col-xs-2"><b>จำนวนสินค้า</b></div>
							<div class="col-md-2 col-xs-2"><b>ราคาสินค้า</b></div>
							<div class="col-md-2 col-xs-2"><b>บาท</b></div>
						</div>
						<div id="cart_checkout"></div>
						<!--<div class="row">
							<div class="col-md-2">
								<div class="btn-group">
									<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
									<a href="" class="btn btn-primary"><span class="glyphicon glyphicon-ok-sign"></span></a>
								</div>
							</div>
							<div class="col-md-2"><img src='product_images/imges.jpg'></div>
							<div class="col-md-2">Product Name</div>
							<div class="col-md-2"><input type='text' class='form-control' value='1' ></div>
							<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
							<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
						</div> -->
						<!--<div class="row">
							<div class="col-md-8"></div>
							<div class="col-md-4">
								<b>Total $500000</b>
							</div> -->
						</div> 
						<div class="panel-footer">SELIAH-Celestial_Shop</div>
					</div>
				</div>
			</div>
			<div class="col-md-2" style="margin-bottom:25%;"></div>
		</div>
		
		<footer class="panel-footer" style="background-color:#7B00CA; color: #FFFFFF; font-size: 123%; heigth=:50%;">
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

</body>	
</html>
















		