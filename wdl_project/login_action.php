<?php
session_start();
$name = $_POST['uname'];
$pass = $_POST['pass'];

$conn = mysqli_connect("localhost:3307","root","root","blue_care");

$query = "select * from login where uname='$name' && pass='$pass'";
$result = mysqli_query($conn,$query);
$num = mysqli_num_rows($result);

if($num==1) {
	$_SESSION['username'] = $name;
	header('location:userpage.php');
}
else {
	header('location:login.html');
}
?>
