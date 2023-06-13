




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Population info</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <style> 

 #top{
background-color:aliceblue;
height: 80px;
width: 100%;
border-top-right-radius:0em;
border-top-left-radius: 0em;
border-bottom-right-radius: 0em;
border-bottom-left-radius: 0em;
box-shadow: 1px 1px 1px 2px blue;
text-align: center;
font-size: x-large;
font-weight: bold;
font-family: georgia;
font-display: fallback;
}


</style>
</head>
<body>


<div id="top"><marquee behavior = "alternate" scrollamount ="5" onmouseover ="this.stop()" onmouseout ="this.start()">Murakaza neza duhigure mu muryango web App
             
            </marquee>
</div>

<div class="container mt-3">
  <h2>Population info</h2>
  <form action="pop_insert.php"method="post">
    <div class="mb-3 mt-3">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="mb-3">
      <label for="lastname">Lastname:</label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter Lastname" name="lastname">
    </div>
    <div class="mb-3">
      <label for="lastname">Address:</label>
      <input type="text" class="form-control" id="Address" placeholder="Enter Address" name="address">
    </div>
    <div class="mb-1">
      <label for="lastname">City:</label>
      <input type="text" class="form-control" id="city" placeholder="Enter city" name="city">
    </div>
    <div class="mb-1">
      <label for="phone">Phone:</label>
      <input type="phone" class="form-control" id="phone" placeholder="Enter phone" name="phone">
    </div>
    <div class="mb-3">
      <label for="lastname">country:</label>
      <input type="text" class="form-control" id="country" placeholder="Enter country" name="country">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>



</body>
</html>
