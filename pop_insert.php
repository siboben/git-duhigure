<?php


	// code...


$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"duhigure_db");
$nam=$_POST['name'];
$lnam=$_POST['lastname'];

$add=$_POST['address'];
$ct=$_POST['city'];
$phon=$_POST['phone'];
$countr=$_POST['country'];
$sql="insert into population set pop_name='$nam',pop_lastname='$lnam',pop_address='$add',pop_city='$ct',pop_phone='$phon',pop_counrty='$countr'";
$quer=mysqli_query($link,$sql);


if ($quer) {
	 echo "<script>alert('Congratulation data have been inserted into your database')</script>";
}
else{

echo "<script>alert(' O ooosph data have not been inserted into your database' )</script>";
}
echo"<a href='index.php'>return to the homepage</a>";



mysqli_close($link);

?>