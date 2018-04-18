<?php
$title = "Settings";
require_once('templates/header.php'); ?>
<h2>Settings</h2>
<script type="text/javascript">
	$(document).ready(function(){
		$('#wallet').hide();
		$('#password').hide();
		$('#profile').hide();
		
		$('#clickwallet').click(function(){
			$('#wallet').toggle(4000);
		});
		$('#clickpass').click(function(){
			$('#password').toggle(4000);
		});
		$('#clickprofile').click(function(){
			$('#profile').toggle(4000);
		});
		$('#closep').click(function(){
			$('#profile').toggle(2000);
		});
		$('#closew').click(function(){
			$('#wallet').toggle(2000);
		});
		$('#closepass').click(function(){
			$('#password').toggle(2000);
		});
		$('#logout').click(function(){
			$("#logoutModal").modal();
		});
	});
</script>
	<button class="btn btn-primary" id="clickwallet">Change Wallet Address</button>
	<button class="btn btn-primary" id="clickpass" >Change Password</button>
	<button class="btn btn-primary" id="clickprofile">Edit Profile</button>
	<hr>
<div id='wallet' class="card">
	<div class="card-header">
		<a id="closew" class="pull-right bg-danger text-center">X</a>
		<h3>Change Wallet Address</h3>
	</div>
		<div class="card-body">
			<form method="POST" action="">
				<div class="form-group">
				<input type="text" class="form-control" name="old_wallet" placeholder="Old Wallet Address" disabled>
				</div>
				<div class="form-group">
				<input type="text" class="form-control" name="new_wallet" placeholder="New Wallet Address">
				</div>
				</div>
		<div class="card-footer">
				<input type="submit" class="btn btn-success" name="changeWallet" value="Change Wallet Address" />
			</div>
			</form>
	</div>
<div id='password' class="card">
	<div class="card-header">
		<a id="closepass" class="pull-right bg-danger text-center">X</a>
	<h3>Change Password</h3>
	</div>
	<div class="card-body">
			<form method="POST" action="">
				<div class="form-group">
				<input type="text" class="form-control" name="old_password" placeholder="Old Password" disabled>
				</div>
				<div class="form-group">
				<input type="text" class="form-control" name="new_password" placeholder="New Password">
				</div>
				</div>
		<div class="card-footer">
				<input type="submit" class="btn btn-success" name="changePassword" value="Change Password" />
			</div>
			</form>
</div>
<div id='profile' class="card">
	<div class="card-header">
		<a id="closep" class="pull-right bg-danger text-center">X</a>
		<h3>Edit Profile</h3>
	</div>
	<div class="card-body">
	<form method="POST" action="">
				<div class="form-group">
				<input type="text" class="form-control" name="name" placeholder="Name">
				</div>
				<div class="form-group">
				<input type="email" class="form-control" name="email" placeholder="Email">
				</div>
				<div class="form-group">
					<input type="number" class="form-control" name="phone" placeholder="+" />
				</div>
				</div>
		<div class="card-footer">
				<input type="submit" class="btn btn-success" name="editProfile" value="Edit Profile" />
			</div>
			</form>
</div>
<?php

?>

<?php require_once('templates/footer.php'); ?>
