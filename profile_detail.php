<?php
require "db.php";
session_start();

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
		<script src="node_modules\sweetalert2\dist\sweetalert2.min.js"></script>
		<link rel="stylesheet" href="node_modules\sweetalert2\dist\sweetalert2.min.css">
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
	<script> Swal.fire({
				title: 'Profile <?php echo "ของคุณ,".$_SESSION["name"]; ?>',
				width: 300,
				padding: '3em',
				imageUrl: 'logo.png',
				background: '',
				backdrop: `
					rgba(0,0,20,0.4)
					url("img_fontsEnd/d5975edf-417d-4015-8d42-7d20368cb5df.gif")
					left top
					no-repeat`})  
	</script>
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
			<div class="col-md-8" id="cart_msg">
				<!--profile Message--> 
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="container">    
                <div class="jumbotron">
                  <div class="row">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                          <img src="https://www.svgimages.com/svg-image/s5/man-passportsize-silhouette-icon-256x256.png" alt="stack photo" class="img">
                      </div>
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                          <div class="container" style="border-bottom:1px solid black">
                            <h2><?php echo "".$_SESSION["name"]; ?> <?php echo "".$_SESSION["l_name"]; ?></h2>
                          </div>
                            <hr>
                          <ul class="container details">
                            <li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span><?php echo "".$_SESSION["phone"]; ?></p></li>
							<li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span><?php echo "".$_SESSION["address2"]; ?></p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span><?php echo "".$_SESSION["email"]; ?></p></li>
                            <li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span><?php echo "".$_SESSION["address1"]; ?></p></li>
                            <li><p><span class="glyphicon glyphicon-new-window one" style="width:50px;"></span><a href="https://www.facebook.com/SEILAH.Celestial">SEILAH Celestial</p></a>
                          </ul>
                      </div>
                  </div>
                </div>
			</div>
			</div>
		
</body>
<footer class="panel-footer " style="background-color:#7B00CA; color: #FFFFFF; font-size: 123%;  position: fixed; left: 0; bottom: 0;width: 100%;color: white; text-align: center;" >

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
</html>
















		