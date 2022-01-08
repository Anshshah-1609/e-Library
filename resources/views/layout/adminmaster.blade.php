<!DOCTYPE html>
<html lang="en">
<head>
  <title>e-Library
  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background:#cccccc;
  }
  .navbar{
    background-color:#0F292F;
  }
  </style>
</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0px">
<div class="row">
	<div class="col-md-6  text-right">

		<img src="{{'http://127.0.0.1:8000/catimages/' . 'logo.png'}}" class="img-circle" width="100px" height="100px">
	</div>
	
	<div class="col-md-6 text-left">
  <br>
	<h1 style="color:red"><b>e-<span style="color:black">Library</span></b> </h1><br>

	</div>
 </div>
 <br><br>
<nav class="navbar navbar-expand-sm">
  <a class="navbar-brand" href="#" style="color:#16FFBD">HOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/category" style="color:#16FFBD">Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/book" style="color:#16FFBD">Books</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="/usermaster" style="color:#16FFBD">Users</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="/ordermaster" style="color:#16FFBD">Orders</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="/download" style="color:#16FFBD">Downloads</a>
      </li>
      
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
   
    <div class="col-sm-12">
    <br>
			@yield("contain")
			<br><br><br>
	  </div>
  </div>
</div>
<br><br><br><br><br><br><br>
<div class="jumbotron text-center" style="margin-bottom:0">
  
</div>

</body>
</html>
