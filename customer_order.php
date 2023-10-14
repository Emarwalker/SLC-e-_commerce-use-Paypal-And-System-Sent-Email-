<?php

session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
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
		<script src="node_modules\sweetalert2\dist\sweetalert2.min.js"></script>
		<link rel="stylesheet" href="node_modules\sweetalert2\dist\sweetalert2.min.css">
		<style>
			table tr td {padding:10px;}
		</style>
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
<script> Swal.fire({
				title: 'Order <?php echo "ของคุณ,".$_SESSION["name"]; ?>',
				width: 300,
				padding: '3em',
				imageUrl: 'img_fontsEnd/order.jpg',
				background: '',
				backdrop: `
					rgba(0,0,20,0.4)
					url("img_fontsEnd/d5975edf-417d-4015-8d42-7d20368cb5df.gif")
					left top
					no-repeat`})  
	</script>
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
					<div class="dropdown-menu" style="width:450px;">
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
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hi,".$_SESSION["name"]; ?></a>
					<ul class="dropdown-menu gray-dark">
						<li><a href="cart.php" style="text-decoration:none; color:blue;"><span class="glyphicon glyphicon-shopping-cart">Cart</a></li>
						<li class="divider"></li>
						<li><a href="customer_order.php" style="text-decoration:none; color:blue;">Orders</a></li>
						<li class="divider"></li>
						<li><a href="profile_detail.php" style="text-decoration:none; color:blue;">profile</a></li>
						<li class="divider"></li>
						<li><a href="logout.php" style="text-decoration:none; color:blue;">Logout</a></li>
					</ul>
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
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading" style="background-color: #7B00CA;"><font color="#FFFFFF"><h1>รายละเอียดการสั่งซื้อของลูกค้า</h1></font></div>
					<div class="panel-body" >
						<hr/>
						<?php
							include_once("db.php");
							$user_id = $_SESSION["uid"];
							$orders_list = "SELECT o.order_id,o.user_id,o.product_id,o.qty,o.trx_id,o.p_status,p.product_title,p.product_price,p.product_image FROM orders o,products p WHERE o.user_id='$user_id' AND o.product_id=p.product_id";
							$query = mysqli_query($con,$orders_list);
							if (mysqli_num_rows($query) > 0) {
								while ($row=mysqli_fetch_array($query)) {
									?>
										<div class="row">
											<div class="col-md-3">
												<img style="float:left; width:400px; heigth:400px;" src="product_images/<?php echo $row['product_image']; ?>" class="img-responsive img-thumbnail"/>
											</div>
											<div class="col-md-9" >
												<table>
													<tr><td>ชื่อผลิตภัณฑ์</td><td><b><?php echo $row["product_title"]; ?></b> </td></tr>
													<tr><td>ราคาสินค้า</td><td><b><?php echo $row["product_price"]."บาท"; ?></b></td></tr>
													<tr><td>ปริมาณ</td><td><b><?php echo $row["qty"]; ?></b></td></tr>
													<tr><td>เลขผู้เสียภาษี</td><td><b><?php echo $row["trx_id"]; ?></b></td></tr>
													<tr><td>สถานะการจัดส่ง</td><td><b>สินค้าอยู่ในระหว่างการส่งรอรับภายใน 7 วัน</b></td></tr>
												</table>
											</div>
										</div>
										<hr>
									<?php
								}
							}
						?>
						
					</div>
					<div class="panel-footer" >© SELIAH-Celestial_Shop.com</div>
				</div>
			</div>
			<div class="col-md-2" style="padding-bottom: 35%;"></div>
		</div>
	</div>
		
	<footer class="panel-footer " style="background-color:#7B00CA; color: #FFFFFF; font-size: 123%; " >

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
















































