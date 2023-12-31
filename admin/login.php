<?php include "./templates/top.php"; ?>
<?php include "./templates/navbar.php"; ?>
<br><br>
	<div class="container">
		<div class="card">
			<div class="card-header">SLC Admin Login</div>
			<div class="card-body">
				<div class="row justify-content-center" >
					<div class="col-md-4">
						<h4>Admin Login</h4>
						<p class="message"></p>
						<form id="admin-login-form">
						<div class="form-group">
							<label for="email">Email address</label>
							<input type="email" class="form-control" name="email" id="email"  placeholder="Enter email">
							<small id="emailHelp" class="form-text text-muted"></small>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="password" id="password" placeholder="Password">
						</div>
						<input type="hidden" name="admin_login" value="1">
						<button type="button" class="btn btn-primary login-btn">Login</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="card-footer">
     	<small class="text-muted">SLC Last updated 3 mins ago</small></div>
	</div>





<?php include "./templates/footer.php"; ?>

<script type="text/javascript" src="./js/main.js"></script>
