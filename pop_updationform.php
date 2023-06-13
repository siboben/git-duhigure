<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Duhigure Mu Muryango Web App</title>
</head>
<body>
<?php
//$id=$_REQUEST['id'];
$link=mysqli_connect("localhost","root","","duhigure_db");
//mysqli_select_db($link,"level6it");

//$sql="select * from level6it where id='".$_GET['id']."'";
//$query=mysqli_query($link,$sql);
//$row=mysqli_fetch_array($query);
$id=$_GET['pop_id'];
$query = "SELECT * from population where pop_id='$id'"; 
$result = mysqli_query($link, $query) or die ( mysqli_error());
//$row = mysqli_fetch_assoc($link,$result);
$row=mysqli_fetch_array($result);
?>
<table border="1"align="center"style="border-collapse: collapse;text-align: center;font-weight: bold;">
<form method="POST"action="pop_update.php">
<input type="hidden" name="pop_id" value="<?php echo $row['pop_id'];?>">
	<td>Pop_Name:<td/><td>
		<input type="text" name="pop_name" value="<?php echo $row['pop_name'];?>">
		
	</td></tr>
	<tr><td>Pop_Lastname:<td/><td>
		<input type="text" name="pop_lastname" value="<?php echo $row['pop_lastname'];?>">
	</td></tr>
	<tr><td>Pop_Address:<td/><td>
		<input type="text" name="pop_address" value="<?php echo $row['pop_address'];?>">
	</td></tr>
<tr><td>Pop_City:<td/><td>
		<input type="text" name="pop_city" value="<?php echo $row['pop_city'];?>">
	</td></tr>
	<tr><td>Pop_phone:<td/><td>
		<input type="text" name="pop_phone" value="<?php echo $row['pop_phone'];?>">
	</td></tr>

	<tr><td>Pop_Country:<td/><td>
		<input type="text" name="pop_counrty" value="<?php echo $row['pop_counrty'];?>">
	</td></tr>
<tr><td rowspan="2"style="padding: 3px;"><input type="submit"name="submit"value="update"><input type="submit"value="reset"></tr>
</form>
</table>


</body>
</html>