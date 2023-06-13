<?php

if(isset ($_SESSION['success']) && $_SESSION['success']){


/*
session_start();
 if(isset($_SESSION['login']) && $_SESSION['login']=='YES'){
 header("location:d.php");
*/

 header("Location:view_pop.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Duhigure Mumuryango Web App </title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<style>
#top{
	/*position: fixed;*/
background-color:aliceblue;
height: 80px;
width: 100%;

box-shadow: 1px 1px 1px 1px black;
text-align: center;
font-size: x-large;
font-weight: bold;
font-family: georgia;
font-display: fallback;

padding: 5px 1em 0 2em;;
}

#tb_sample{
width: 80;
height: 200px;
}
#footer{
background-color:lightcoral;
height: 150px;
width: 100%;
margin-top:2px;
clear: both;
text-align: center;
text-decoration-color: darkorange;
}




</style>

</head>
<body>

<div id="top"><marquee behavior = "alternate" scrollamount ="5" onmouseover ="this.stop()" onmouseout ="this.start()"><blink>Murakaza neza duhigure mu muryango web App</blink>Murakaza neza duhigure mu muryango web App
             
            </marquee>
</div>
<a href="index.php"style='float:right;font-size:x-large;font-weight: bold;text-decoration: none;animation-delay: 2s;'>Logout<a/>


<?php

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"duhigure_db");

$sql="select * from population";
$query=mysqli_query($con,$sql);

/*echo'<div class="table-responsive">';
    echo '<table class="table table-bordered">';
     echo' <thead>';
       echo' <tr>';*/
echo"<center><div id='tb_sample'><table border='1'style='border-collapse:collapse;margin-top:10px;width:table-bordered'></center></div>";
echo"<a href='pop_insert.php'font-color='lightblue'style='text-align:center;'>Go Back to AddNew Record in Database</a>";
echo"<tr>";
echo"<th>Pop_Id</th>";
                                                    
echo"<th>Pop_Name</th>";
echo"<th>Pop_Lastname</th>";
//echo"<th>Pop_Lastname</th>";
echo"<th>Pop_Address</th>";
echo"<th>Pop_City</th>";
echo"<th>Pop_phone</th>";
echo"<th>Pop_Country</th>";
echo"<th colspan='2'>Action</th>";
echo"</tr>";
$i=0;
while($row=mysqli_fetch_array($query)){
	$i++;
	echo"<tr>";
echo'<td>'.$i.'</td>';
echo'<td>'.$row['pop_name'].'</td>';
echo'<td>'.$row['pop_lastname'].'</td>';
echo'<td>'.$row['pop_address'].'</td>';
echo'<td>'.$row['pop_city'].'</td>';
echo'<td>'.$row['pop_phone'].'</td>';
echo'<td>'.$row['pop_counrty'].'</td>';
//echo'<td>'.$row['file'].'</td>';



echo "<td align='center'><a href='pop_updationform.php?pop_id=$row[pop_id]'style='text-decoration:none;color:blue;'>Edit</a>
</td>";
echo "<td align='center'><a href='pop_delete.php?pop_id=$row[pop_id]'style='text-decoration:none;color:red;'>Delete</a>
</td>";
echo"</tr>";
}


echo"</table>";


mysqli_close($con);

?>
<div id="footer"style="color:blue;font-size: xx-large;font-family:Times New Roman;float:bottom;padding-bottom:20px;clear: both;margin-top: 350px;">Copyright  &copy;, All Right Reserverd to the Designer <?php $date=date('M,d,y,h:i:s');

echo $date;?></div>
</body>
</html>
<?php
/*
}
else {
    header ("Location: sisloginform.php?msg=loginfirst");

}
*/
/*}
else{
header("location.sisformlogin.php");


}*/
?>
