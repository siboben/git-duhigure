<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>


	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Admin Login page</title>

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
}
#footer{
background-color:lightcoral;
height: 100px;
width: 100%;
margin-top:0px;
clear: both;
text-align: center;
text-decoration-color: darkorange;
}

</style>
</head>
<body>
<div id="top"><marquee behavior = "alternate" scrollamount ="5" onmouseover ="this.stop()" onmouseout ="this.start()">Murakaza neza duhigure mu muryango web App
  <a href="index.php"style="float: right;">Go Back</a>           
            </marquee>
</div>

<!-- Section: Design Block -->
<section class=" text-center text-lg-start">
  <style>
    .rounded-t-5 {
      border-top-left-radius: 0.5rem;
      border-top-right-radius: 0.5rem;
    }

    @media (min-width: 992px) {
      .rounded-tr-lg-0 {
        border-top-right-radius: 0;
      }

      .rounded-bl-lg-5 {
        border-bottom-left-radius: 0.5rem;
      }
    }
  </style>
  <div class="card mb-3">
    <div class="row g-0 d-flex align-items-center">
      <div class="col-lg-4 d-none d-lg-flex">
        <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" alt="Trendy Pants and Shoes"
          class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
      </div>
      <div class="col-lg-8">
        <div class="card-body py-5 px-md-5">

          <form action="login.php"method="post">
            <!-- username input -->
            <div class="form-outline mb-4">
              <input type="text" id="username" name="uname"class="form-control" />
              <label class="form-label" for="username">Username</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="Password"name="upass" class="form-control" />
              <label class="form-label" for="password">Password</label>
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
              <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                  <label class="form-check-label" for="form2Example31"> Remember me </label>
                </div>
              </div>

              <div class="col">
                <!-- Simple link -->
                <a href="#!">Forgot password?</a>
              </div>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>

          </form>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
<div id="footer"style="color:blue;font-size: xx-large;font-family:Times New Roman;float:bottom">Copyright  &copy;, All Right Reserverd to the Designer <?php $date=date('M,d,y,h:i:s');

echo $date;?></div>
</body>
</html>

