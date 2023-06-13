<?php

$login = $_POST['uname'];
$password = $_POST['upass'];

include 'connect.php';

$query = "select * from tbl_user where name = '$login' and password = '$password'";
$result = mysqli_query ($link,$query);
$fetch  = mysqli_fetch_array ($result);
        $user = $fetch['uname'];
	$pass = $fetch['upass'];
if ($user==$login && $pass==$password) {	
	session_start();
	$_SESSION['success'] = 'OK';
	$_SESSION['uname'] = $login;
	echo "done!!";
	header ("Location: view_pop.php");	
}
else {
	header ("Location: login_form.php?msg=FAIL");
}
?>