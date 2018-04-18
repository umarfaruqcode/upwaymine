<?php 
require 'includes/init.php';
 
if (!isset($_GET['email']) || !isset($_GET['v_code']) ) {
	redirect_to('login.php');
}

$email = $_GET['email'];
$v_code = $_GET['v_code'];

$query = "SELECT * FROM users WHERE email = '" . $email . "' AND v_code = '" . $v_code . "'";

$result = mysqli_query($conn, $query);

if ($row = mysqli_fetch_assoc($result)) {
	
	var_dump($row);

	$query = "UPDATE users SET verified = 1 WHERE email = '" . $email . "' AND v_code = '" . $v_code . "'";
	mysqli_query($conn, $query);

	$_SESSION["message"] = "VERIFICATION SUCCESS";
	redirect_to("login.php");

} else {

	echo "WAHALA DEY";

}


echo "$email <br>";
echo "$v_code";


?>