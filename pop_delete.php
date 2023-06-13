<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"duhigure_db");
$id=$_GET['pop_id'];

$sql="delete from population where pop_id='$_GET[pop_id]'";
$query=mysqli_query($link, $sql);
if ($query) {
header("location:view_pop.php");	
}
else{

header("location:pop_delete.php");

}


mysqli_close($link);

?>