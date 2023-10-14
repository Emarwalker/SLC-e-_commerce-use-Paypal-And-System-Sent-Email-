
<?php include "./templates/top.php"; ?>

<?php include "./templates/navbar.php"; ?><br><br>

<div class=".container-fluid">
	<div class="row justify-content-center" style="margin:100px 0;">
		<div class="col-md-6">
			<center><h4>Admin Register</h4></center>
			<p class="message"></p>
			<form id="admin-register-form">
			  <div class="form-group col-mr-md-6">
			    <label for="name">Name</label>
			    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
			  </div>
			  <div class="form-group col-mr-md-6">
			    <label for="email">Email address</label>
			    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="@gmail.com">
			    <small id="emailHelp" class="form-text text-muted"></small>
			  </div>
			  <div class="form-group col-mr-md-6">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
			  </div>
			  <div class="form-group col-mr-md-6">
			    <label for="cpassword">Confirm Password</label>
			    <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Password">
			  </div>
			  <input type="hidden" name="admin_register" value="1">
			  <center><button type="button" class="btn btn-primary register-btn" style="width:100%;">Register</button></center>
			</form>
		</div>
	</div>
</div>




<?php include "./templates/footer.php"; ?>

<script type="text/javascript" src="./js/main.js"></script>