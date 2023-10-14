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
		<link rel="shortcut icon" type="image/x-icon" href="logo.png">
		<title>SELIAH-Celestial_Shop</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<style>
			@media screen and (max-width:480px){
				#search{width:80%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
			}
		</style>
		<style> 
			input[type=text] {
			width: 130px;
			height:35px;
			box-sizing: border-box;
			border: 2px solid #ccc;
			border-radius: 4px;
			font-size: 16px;
			background-color: white;
			background-image: url('searchicon.png');
			background-position: 10px 10px; 
			background-repeat: no-repeat;
			padding: 12px 20px 12px 40px;
			-webkit-transition: width 0.4s ease-in-out;
			transition: width 0.4s ease-in-out;
			}

			input[type=text]:focus {
			width: 100%;
			height:35px;
			}
		</style>
		<script src="node_modules\sweetalert2\dist\sweetalert2.min.js"></script>
		<link rel="stylesheet" href="node_modules\sweetalert2\dist\sweetalert2.min.css">
	</head>
<body>
	<div class="wait overlay">
	<div class="loader"></div>
	<script> Swal.fire({
				title: 'ยินดีต้อนรับ <?php echo "Hi,".$_SESSION["name"]; ?>',
				width: 300,
				padding: '3em',
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
				<li class="form-group nav navbar-nav navbar-left"  style="margin-top:5px;">
		          <input type="text" class="from-control" placeholder="ค้นหา" id="search">
		        </li>
		        <button style="margin-top:5px;" type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
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
	
<div class="container-fluid col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
			<div class="item active">
			  <img src="product_images/PS1/d1.jpg" alt="Celestial Shop">
			  <div class="carousel-caption">
				Celestial Shop
			  </div>
			</div>
			<div class="item">
			  <img src="product_images/PS1/d2.jpg" alt="ANTARA">
			  <div class="carousel-caption">
				ANTARA'S
			  </div>
			</div>
			  <div class="item">
			  <img src="product_images/PS1/d3.jpg" alt="Corona">
			  <div class="carousel-caption">
				Corona's
			  </div>
			</div>
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
</div>
	
<div class="container-fluid">
		</div>


		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="jumbotron">
						<div class="container-fluid ">
					  <h1 align="center">ข้อมูล...</h1>
					  <p>เปิด Pre-Order แล้วนะคะ
								สำหรับเสื้อยืดวันเกิดน้องนุ๊ก Eurela - SLC
								ที่น้องออกแบบด้วยตัวเองเลย
								สนใจติดต่อได้ที่ Celestial Shop
								</p>
					  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
					</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="jumbotron">
						<div class="container-fluid">
					  <h1 align="center">ข้อมูล....</h1>
					  <p>เเละเเล้วก็ถึงเวลาสิ้นสุดการ Pre-Order เสื้อ HBD Antara เเล้วนะคะ
							สำหรับผู้ที่สนใจเสื้อ HBD Antara สนใจติดต่อได้ที่ Celestial Shop</p>
					  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
					</div>
					</div>
				</div>
			</div>
		</div>
	
	<div class="container-fluid">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<!--<div class="col-md-2 col-xs-8">
				<div id="get_category">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
				<!--<div id="get_brand">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Brand</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
			</div>
			<div class="col-md-12 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-default" >
					<div class="panel-heading"style="background-color: #7B00CA;"><font color="#FFFFFF">สินค้าของทาางร้าน</font></div>
					<div class="panel-body">
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
						<!--<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body">
									<img src="product_images/images.JPG"/>
								</div>
								<div class="panel-heading">$.500.00
									<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
								</div>
							</div>
						</div> -->
					</div>
					<div class="panel-footer">&copy; SELIAH-Celestial_Shop.com </div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
 </div>
	<div class="jumbotron">
	<div class="container">
  <h1>SLC - SEILAH Celestial!</h1>
  <p><h3>สามารถติดต่อสั่งซื้อได้ที่เพจ Celestial Shop<h3></p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
</div>
</div>
		
<footer class="panel-footer " style="background-color:#7B00CA; color: #FFFFFF; font-size: 123%;" >

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











































