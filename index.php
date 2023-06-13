<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Duhigure Mumuryango</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstra p@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
#top{
	/*position: fixed;*/
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
}
#menu{
background-color: green ;
width: 100%;
height: 40px;
text-decoration: none;
list-style: none;

}


ul{
list-style: none;	
}
ul li{
display:inline-table;
text-decoration: none;
list-style: none;
padding:auto;
text-align: center;
float:left;

}
a{
text-decoration: none;
list-style: none;
font-weight: bold;
font-size: 20px;
font-family: comic sans-serif;
font-style:Times New Roman;
color: white;
text-align: center;
/*margin-right: 90px;*/
padding: 20px;
margin-right: 20px;
}
a:hover{
color:red ;
}
a:visited{
color: black;

}

/*#left{
background-color:lightseagreen;
width: 30%;
height: 350px;
margin-top: 2px;
float: left;
box-sizing: border-box;

}*/

#content{
background-color:darkorange;
width: 100%;
height: 400px;
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

/*#right{
background-color:lightseagreen;
width: 29%;
height: 350px;
margin-top: 2px;
float: right;
margin-left:2px;
}
*/
#footer{
background-color:lightcoral;
height: 150px;
width: 100%;
/*margin-top:2px;*/
clear: both;
text-align: center;
text-decoration-color: darkorange;
margin-top:10px;
}


@media screen and (max-width: 800px) {
  .left, .main, .right {
    width: 100%; /* The width is 100%, when the viewport is 800px or smaller */
  }
</style>
</head>
<body>
	
<div id="top"><marquee behavior = "alternate" scrollamount ="5" onmouseover ="this.stop()" onmouseout ="this.start()">Murakaza neza duhigure mu muryango web App
             
            </marquee>
</div>

<div id="menu">

<ul>
<li>
<a href="#">Home</a>	
</li>	
<li>
<a href="pop_info.php">Population info</a>	
</li>	
<li>
<a href="login_form.php">Admin page</a>	

</li>	
<li>
<a href="#">Contact us</a>	

</li>
<li>
<a href="#">About us</a>	
</li>	
</ul>

</div>	
</div>
<div id="left"></div>
<div id="content"></div>
<div id="right"></div>
<div id="footer"style="color:blue;font-size: xx-large;font-family:Times New Roman;float:bottom;">Copyright  &copy;, All Right Reserverd to the Designer <?php $date=date('M,d,y,h:i:s');

echo $date;?></div>
</body>
</html>