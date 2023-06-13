<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


  <style>
#top{
background-color:aliceblue;
height: 80px;
width: 100%;
border-top-right-radius:1em;
border-top-left-radius: 1em;
border-bottom-right-radius: 0em;
border-bottom-left-radius: 0em;
box-shadow: 1px 1px 1px 2px blue;
text-align: center;
font-size: x-large;
font-weight: bold;
font-family: georgia;
font-display: fallback;
position:sticky;
}

#content{
background-color:wheat;
width: 100%;
height: 300px;
margin-top: 2px;
float:right;
/*margin-left:2px;*/
padding-top: 1px;
padding-bottom: 2px;
/*border-top-left-radius: 1rem;
border-top-right-radius: 1rem;
border-bottom-left-radius: 1rem;
border-bottom-right-radius: 1rem;*/
box-shadow:1px 1px 1px 2px royalblue;
}
#loginpage{
background-color:black;
width: 25%;
height: 50px;
padding-bottom: 4px;
padding-top: auto;

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
  <div id="top"><marquee behavior = "alternate" scrollamount ="5" onmouseover ="this.stop()" onmouseout ="this.start()">Murakaza neza duhigure mu muryango web App
             
            </marquee>
</div>
<div id="loginpage"style="background-color: whitesmoke;width: 100%;height: 200px;padding-bottom: 40px;">
  <div id="content"></div>
<center><form action="admin_login.php"method="POST">
username:<input type="text"name="uname"></br>
password:<input type="password"name="upass"></br>
<input type="submit"value="submit">

</form>

<div id="footer"style="color:blue;font-size: xx-large;font-family:Times New Roman;float:bottom;clear: both;">Copyright  &copy;, All Right Reserverd to the Designer <?php $date=date('M,d,y,h:i:s');

echo $date;?></div>
</center>


</div>
</body>
</html>