<?php

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"duhigure_db");

$login = $_POST['uname'];
$password = $_POST['upass'];

$query = "select * from admin_user where admin_username = '$login' and admin_password = '$password'";
$result = mysqli_query ($link,$query);
$fetch  = mysqli_fetch_array ($result);
        $user = $fetch['admin_username'];
	$pass = $fetch['admin_password'];
if ($user==$login && $pass==$password) {	
	session_start();
	$_SESSION['success'] = 'OK';
	$_SESSION['uname'] = $login;
	echo "done!!";
	header ("Location:view_pop.php");	
}
else {
	header ("Location:admin_login.php?msg=FAIL");
}
?>