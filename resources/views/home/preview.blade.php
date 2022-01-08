<!DOCTYPE html>
<head>
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
  font: normal 18px Roboto,arial,sans-serif;
  font-family: 'Dancing Script', cursive!important;

}
#logo-img{
	padding-top:0px;
    margin:50px 10px 10px 10px;
	height:150px;
}

h2{width:auto;color:#12a70c;margin:5px 5px 5px 0px;}

footer {
      background-color:#0F292F;
      color: #000;
      padding: 15px;
	  width:auto;
    }
</style>
</head>
<body>
<center>
<br><br>
<h2 style="color:#CB2D6F;"><u>{{$book->bname}} Book</u></h2>
<br>
<br>
<embed src="http://127.0.0.1:8000/bookpdf/{{$book->bpdf}}" width="900px" height="600px">
</center>
<br><br><br>
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
