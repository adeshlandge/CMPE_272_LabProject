<?php

//$con=mysqli_connect("localhost:3306","root","","adeshlan_WPZJS") or die(mysqli_error($con)); #3308
$con = mysqli_connect("localhost", "adeshlan", "Ilovesman1998@a", "adeshlan_WPZJS") or die(mysqli_error($con));

if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
session_start();

$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$message = mysqli_real_escape_string($con, $_POST['message']);

$user_reg = "insert into query(name,email,message) values('$name','$email','$message')";

$result = mysqli_query($con, $user_reg) or die(mysqli_error($user_reg));


echo "<center>Thankyou for contacting us.<br>Our Representative will contact you soon. <br>";
?>


<a href="index.php"> <?php echo "<br>Continue Shopping..!!</center>"; ?> </a>