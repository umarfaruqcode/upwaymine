<?php 
// session_start();
// ob_start();

// include 'db.php';
// include 'helpers.php';
require 'includes/init.php';
include 'includes/navbar.php';

if (isset($_POST['submit'])) {
	$fullname = $_POST['fullname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$country = $_POST['country'];
	$password = $_POST['password'];

    // $email = "";
    $v_code = date("Y") . mt_rand(1000, 2000);
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'") or die($conn);
    if(mysqli_num_rows($sql) > 0){
    	$_SESSION['error'] = "Email $email already exists";
    	redirect_to("register.php");
    }else{

	$sql = "INSERT INTO users (fullname, lastname, email, phone, country, password, v_code) VALUES ('$fullname', '$lastname', '$email', '$phone', '$country', '$password','$v_code')";
	mysqli_query($conn,$sql);

    $_SESSION["message"] = "verify your email $email";
    
    $verification_mail_body = "Click on the following link to verify http://localhost/Bitcoin-Trade/verify.php?email=" . $email . "&v_code=" . $v_code;

    file_put_contents("verify.txt", $verification_mail_body);

  mail($email, "Upwaymine.com verification your account", $verification_mail_body) or die(mysql_error());

    redirect_to("login.php");
}

} else {
	echo "problem";
}






 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <title>Register</title>
 </head>


<section>
<div class="row">
	<div class="col-md-4 col-md-offset-4 card-2">
		<h3 class="text-center">Registration</h3>
		<p class="text-info text-center">All fields are required!</p>
		<?php if(isset($_SESSION['error'])){ ?><span class="alert alert-error"><?php echo $_SESSION['error']; ?></span><?php }?>
		<form action="" method="POST">
			<div class="form-group">
				<label>Full Name</label>
				<input type="text" name="fullname" required class="form-control" />
			</div>
			<div class="form-group">
				<label>Last name</label>
				<input type="text" name="lastname" required class="form-control" />
			</div>
			<div class="form-group">
				<label>Email Address</label>
				<input type="email" name="email" required class="form-control" />
			</div>
			<div class="form-group">
				<label>Phone Number</label>
				<input type="number" name="phone"  required class="form-control"/>
			</div>			
			<div class="form-group">
				<label>Country</label>
				<input type="text" name="country" required class="form-control"/>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="text" name="password" required class="form-control" />
			</div>			
			<div class="form-group">
				<label>Input your wallet Address for validation</label>
				<input type="text" name="password" required class="form-control" />
			</div>
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-block btn-success">Sign Up</button>
			</div>
		</form>
		<p class="text-info text-center">Already registered? <a href="login.php" class="btn btn-default">Log In</a></p>
	</div>
</div>
</section>
<!--//contact-->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Lightbox JavaScript-->
     <script src="js/jquery.lightbox.min.js"></script>
  <!-- Theme JavaScript -->
    <!-- <script src="js/script.js"></script> -->
 </body>
</html> 