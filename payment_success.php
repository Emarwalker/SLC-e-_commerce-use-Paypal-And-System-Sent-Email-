<?php require($_SERVER['DOCUMENT_ROOT']."/SLC/phpmailer/PHPMailerAutoload.php");?>
<?php


session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}

if (isset($_GET["st"])) {

	# code...
	$trx_id = $_GET["tx"];
		$p_st = $_GET["st"];
		$amt = $_GET["amt"];
		$cc = $_GET["cc"];
		$cm_user_id = $_GET["cm"];
		$c_amt = $_COOKIE["ta"];
	if ($p_st == "Completed") {

		

		include_once("db.php");
		$sql = "SELECT p_id,qty FROM cart WHERE user_id = '$cm_user_id'";
		$query = mysqli_query($con,$sql);
		if (mysqli_num_rows($query) > 0) {
			# code...
			while ($row=mysqli_fetch_array($query)) {
			$product_id[] = $row["p_id"];
			$qty[] = $row["qty"];
			}

			for ($i=0; $i < count($product_id); $i++) { 
				$sql = "INSERT INTO orders (user_id,product_id,qty,trx_id,p_status) VALUES ('$cm_user_id','".$product_id[$i]."','".$qty[$i]."','$trx_id','$p_st')";
				mysqli_query($con,$sql);
			}

			$sql = "DELETE FROM cart WHERE user_id = '$cm_user_id'";
			if (mysqli_query($con,$sql)) {
				
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
						<script src="node_modules\sweetalert2\dist\sweetalert2.min.js"></script>
						<link rel="stylesheet" href="node_modules\sweetalert2\dist\sweetalert2.min.css">
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
						
						<div class="container">
	<div class="row">  
       <div class="col-md-12 ">
<div class="panel panel-default">
  <div class="panel-heading" style="background-color:#7B00CA; color: #FFFFFF;">  <h4 >คำสั่งซื้อ</h4></div>
   <div class="panel-body">
    <div class="box box-info">
              <br>
              <!-- /input-group -->
            </div>
            <div class="col-sm-6">
            <h4 style="color:#00b1b1;"><?php echo "".$_SESSION["name"]; ?> <?php echo "".$_SESSION["l_name"]; ?> </h4></span>
              <span><p>คุณชำระค่าสินค้าเสร็จแล้ว Trx_id:<?php echo $trx_id; ?></p></span>            
            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">
    
              
<div class="col-sm-5 col-xs-6 tital " style="margin-bottom:20px;">ชื่อของคุณ:</div><div class="col-sm-7 col-xs-6 "><?php echo "".$_SESSION["name"]; ?></div>
     <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " style="margin-bottom:20px;">นามสกุลของคุณ:</div><div class="col-sm-7"> <?php echo "".$_SESSION["l_name"]; ?></div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " style="margin-bottom:20px;">ส่งหลักฐานใบเสร็จไปที่:</div><div class="col-sm-7"> <?php echo "".$_SESSION["email"]; ?></div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital "style="margin-bottom:20px;" >เบอร์โทรติดต่อ:</div><div class="col-sm-7"><?php echo "".$_SESSION["phone"]; ?></div>

 <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " style="margin-bottom:20px;">เบอร์โทรติดต่อสำรอง:</div><div class="col-sm-7"><?php echo "".$_SESSION["address2"]; ?></div>
<div class="clearfix"></div>
<div class="bot-border"></div>


<div class="col-sm-5 col-xs-6 tital " style="margin-bottom:20px;">ส่งสินค้าไปที่:</div><div class="col-sm-7"><?php echo "".$_SESSION["address1"]; ?></div>
<div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " style="margin-bottom:20px;"></div><div class="col-sm-7"><a href="customer_order.php" class="btn btn-default  btn-lg" style="background-color:#7B00CA; color: #FFFFFF;">สินค้าของคุณที่สั่งซื้อ</a></div>
<div id="cart_checkout"></div>
<?php 

?>

<?php
$mail = new PHPMailer;
$mail->CharSet = "utf-8";
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tsl';
$mail->SMTPAuth = true;


$gmail_username = "sippakorn8599@gmail.com"; // gmail ที่ใช้ส่ง
$gmail_password = "Sa0847180133"; // รหัสผ่าน gmail
// ตั้งค่าอนุญาตการใช้งานได้ที่นี่ https://myaccount.google.com/lesssecureapps?pli=1


$sender = "SLC"; // ชื่อผู้ส่ง
$email_sender = "SLC-Shop"; // เมล์ผู้ส่ง 
$email_receiver = $_SESSION["email"]; // เมล์ผู้รับ ***
$f_name = $_SESSION["name"];
$l_name = $_SESSION["l_name"];

$subject = "Payment success"; // หัวข้อเมล์


$mail->Username = $gmail_username;
$mail->Password = $gmail_password;
$mail->setFrom($email_sender, $sender);
$mail->addAddress($email_receiver);
$mail->Subject = $subject;
	$email_content = "
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset=utf-8'/>
			<title>SLC completed payment </title>
		</head>
		<body>
			<h1 style='background:  #7B00CA;padding: 10px 0 20px 10px;margin-bottom:10px;font-size:25px;color:white;' >
			<center><img src='https://scontent.fbkk12-4.fna.fbcdn.net/v/t1.0-9/53429815_2130632697247706_1120119331833774080_o.png?_nc_cat=103&_nc_sid=09cbfe&_nc_eui2=AeEMRED9FeezNd9ULwIbxjMwj3sYbOtrtEOPexhs62u0Q488ozJLEGx-yp7J83tcbIi29599WsUXB3TsVOQciEdK&_nc_ohc=VJnV4rkDDm8AX9RDQnM&_nc_ht=scontent.fbkk12-4.fna&oh=079a66963d1a71fd899d5ce0ede9b244&oe=5F6C0032' style='width: 80px;'></center>
			<center style='color:white;'>SLC - SEILAH Celestial</center>
			<hr>
			<table style='width:100%;font-size:20px;'>
				<tr>
				<th >คุณ</th>
				<th>สถานะการชำระเงิน</th>
				<th>เลขสั่งซื้อสินค้าของคุณ</th>
				</tr>
				<tr>
					<th >$f_name $l_name</th>
					<th>Complete</th>
					<th >$trx_id</th>
				</tr>
			</table>
			<div id='cart_checkout'></div>
			</h1>
  			</div>
		</div>
		</body>
	</html>
	";
?>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
    </div> 
    </div>
</div>  
   </div>
</div>
<div style="margin-bottom:15%;"></div>


						<footer class="panel-footer" style="background-color:#7B00CA; color: #FFFFFF; font-size: 123%; ">
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

				<?php
			}
		}else{
			header("location:index.php");
		}
		
	}
}
if($email_receiver){
	$mail->msgHTML($email_content);


	if (!$mail->send()) {  // สั่งให้ส่ง email

		// กรณีส่ง email ไม่สำเร็จ
		echo " <script>
		Swal.fire({
			position: 'mid-end',
			icon: 'error',
			title: 'ระบบมีปัญหา กรุณาลองใหม่อีกครั้ง!',
			showConfirmButton: false,
			timer: 1500
		  })
		</script>";
		echo $mail->ErrorInfo; // ข้อความ รายละเอียดการ error
	}else{
		// กรณีส่ง email สำเร็จ
		echo "
		<script>
		Swal.fire({
			position: 'mid-end',
			icon: 'success',
			title: 'ระบบได้ส่งข้อความไปที่ $email_receiver เรียบร้อยแล้ว!',
			showConfirmButton: false,
			timer: 3500
		  })
		</script>";
	}	
}
?>



















































