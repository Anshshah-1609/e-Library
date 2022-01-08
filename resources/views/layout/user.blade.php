<!DOCTYPE html>
<html lang="en">
<head>
  <title>e-Library</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="favicon.ico" rel="shortcut icon"/>

<style>
  
body{
	background-color:#cccccc;
	position:absolute;
	overflow:auto;
    width:100%;
	-webkit-font-smoothing: antialiased;
  font: normal 16px Roboto,arial,sans-serif;
  font-family: 'Dancing Script', cursive!important;

}
#logo-img{
	padding-top:0px;
	height:35px;
	width:100px;
}

#top-menu-bg{
	background-color:#0F292F;
	height:auto;
	width:100%;
	position:fixed;
	z-index:11;
	
}

#seabtn{
	background-color:DodgerBlue;
	margin-left:10px;
	
}
.float-right{
	float:right;
	width:100%;
	height:100%
}

#div1{
	margin-top:70px;
}

.form-inline{
	padding-top:10px;
}

#row1{
	background-color:white;
	padding-left:5px;
	margin-top:15px;
	height:auto;
	width:auto;
	font-size:12px;
}
#img1{
	vertical-align: middle;
	height:110px;
	margin-left:50px;
}

#text1{
	color:black;
	font-size:25px;
	margin-bottom:20px;
	margin-top:70px;
	text-decoration:underline;
}

h2{font-size:17px;width:auto;color:#CB2D6F;margin:5px 5px 5px 0px;}div{display:block}
h1{font-size:22px;width:auto;color:#CB2D6F;margin:5px 5px 5px 0px;}
#img2{
	border-radius:50%;
}
.files-new ul li{
	list-style-type:none;
}
.categories-list ul li{
	list-style-type:none
}

    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color:#f5f0e1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color:#0F292F;
      color: #000;
      padding: 15px;
	  width:auto;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<div id="top-menu-bg">
<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a href="#"><img src="http://127.0.0.1:8000/img/logo-3.png" class="img-circle" width="50" height="50" border="0" style="padding-top:0px;margin-top:0px;"/>
				</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/home" style="color:#16FFBD">Home</a></li>
        <li><a href="/home/about" style="color:#16FFBD">About</a></li>
        <li><a href="/home/contact" style="color:#16FFBD">Contact</a></li>
		<li><form class="form-inline" action="/home/search">
    <input class="form-control mr-sm-2" type="search" name="searchtext" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="seabtn">Search</button>
  </form></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
	  @if(session()->has('uname'))
	  <li>
	  
	  <a href="/home/logout" style="color:#16FFBD"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
	 
	@else 

    <li><a href="home/login" style="color:#16FFBD"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	 
	@endif
	  	 </ul>
    </div>
  </div>
  
</nav>
</div>

<div id="div1">

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-md-9">
	<h3 style="color:purple;">Welcome {{session()->get('uname')}} !!</h3><br> 
	  @yield("contain")
    </div>
	
	<div class="col-md-3"> 
		<div class="dialog-right">
		<div class="box" id="categories">
		<div class="categories-list">
		<h4 id="h4"><a href="#" style="color:#CB2D6F">e-Library:hope</a> Give books away. Get books you want.</h4>
		<ul>
		@foreach($cat->sortByDesc('id') as $c)
		
		<li>
		<a href="http://127.0.0.1:8000/home/{{$c->id}}/catview">
		<img class="img-polaroid" src="http://127.0.0.1:8000/{{'catimages/' . $c->caticon}}" height="50px" width="50px" alt="category"  id="img2"/>
		<p id="pragraph" style="color:#CB2D6F">{{$c->catname}}</p>
		</a>
		
		</li>

		@endforeach
		
		
		</ul>
		<span id="subscribe-heading" style="color:#CB2D6F">Get Top Trending Free Books in Your Mail Box  </span><br><br>
		<input style="padding:5px 5px 5px 5px" type="text" id="mail" placeholder="Enter your Email-Id" size="20%">&nbsp;
		<input type="submit" value="Subscribe" />
		</div>
		</div>
		</div>
    </div>
  </div>
</div>
</div>



<footer class="container-fluid text-center">
  <div class="footer" id="footer">
		<div class="row">
		<div class="col-md-12">
		<div class="row">
			<div class="footer-section col-md-3" style="text-align:center" id="footer-logo">
			<a class="navbar-brand" href="#"><img src="http://127.0.0.1:8000/img/logo-3.png" class="img-circle" width="150"height="120" border="0" style="padding-top:0px;margin-bottom:10px;" id="img1"/>
				</a>
			</div>
				<div class="footer-section col-md-3">
				<div class="footer-title" title="0.0142 / 30-12-2020 11:18:51 / 195.201.87.181">
					<p style="font-size:20px;color:#16FFBD;">Company</p>
				</div> 
					<br />
					<a href="/home/about" style="color:#ffc13b" rel="nofollow">About</a><br />
					<a href="/app" style="color:#ffc13b">Mobile App</a><br />
					<a href="/home/tac" style="color:#ffc13b" rel="nofollow">Terms & Privacy</a><br />
				</div>
				
			<div class="footer-section col-md-3">
				<div class="footer-title"><p style="font-size:20px;color:#16FFBD;">Social</p></div><br />
					<a href="https://twitter.com/pdfdrive" style="color:#ffc13b" target="_blank">Twitter</a><br />
					<a href="https://www.facebook.com/pdfdrive" style="color:#ffc13b" target="_blank">Facebook</a><br />
					<a href="/donate" style="color:#ffc13b">Donate ♥</a><br />
			</div>
				
			<div class="footer-section col-md-3">
				<div class="footer-title"><p style="font-size:20px;color:#16FFBD;">Help</p></div><br />
				<a href="http://127.0.0.1:8000/home/contact" style="color:#ffc13b" rel="nofollow">Contact us</a><br />
				<a href="/home/feedback" style="color:#ffc13b" rel="nofollow">Feedback</a><br />
				<a href="/home/dmca" style="color:#ffc13b" rel="nofollow">DMCA & Copyright</a><br />
			</div>
		</div>
		</div>
		</div>
		</div>

  
</footer>

</body>
</html>