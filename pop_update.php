<?php

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"duhigure_db");
$id=$_POST['pop_id'];

$popname=$_POST['pop_name'];
$poplname=$_POST['pop_lastname'];
$popaddress=$_POST['pop_address'];
$popcity=$_POST['pop_city'];
$popphone=$_POST['pop_phone'];
$popcoun=$_POST['pop_counrty'];

$sql=" update population set pop_name='$popname',pop_lastname='$poplname',pop_address='$popaddress',pop_city='$popcity',pop_phone='$popphone',pop_counrty='$popcoun' where pop_id='$id'";
$query=mysqli_query($link,$sql);

header('location: view_pop.php');

mysqli_close($link);
?>













?>