<?php
session_start();
if(isset ($_SESSION['success']) && $_SESSION['success'] == 'OK'){
	// code..
//header("Location:student_form.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<p><marquee alternate>Student form </marquee></p>
</body>
</html>
<?php
}
else {
	echo '<script type="text/javascript">window.location=\'login_form.php\';</script>';
	}
?>