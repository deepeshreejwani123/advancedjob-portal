<!DOCTYPE html>
<html>
<head>
<title>MAIN PAGE</title>
<meta charset="utf-8">
<link rel="stylesheet" href="attach.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#a1").click(function(){
   	$("#form1").show();
   	$("#form2").hide();
  });
});
$(document).ready(function(){
  $("#a2").click(function(){
   	$("#form2").show();
   	$("#form1").hide();
  });
})
</script>
<style>
a,#a1,#a2{
    color:black;
    font-size:20px;
    font-family:verdana;	
	cursor:pointer;
}
#form1,#form2{
	display:none;	
}
input[type=number],input[type=text]{
    height:20px;
	width:150px;
	margin-left:90px;
	border:3px solid white;
	padding:2px 0px;
	font-size:20px;
	cursor:pointer;
	background-color:black;
	font-family:verdana;
	color:white;
}
input[type=email]{
	height:20px;
	width:150px;
	margin-left:92px;
	border:3px solid white;
	padding:2px 0px;
	font-size:20px;
	cursor:pointer;
	background-color:black;
	font-family:verdana;
	color:white;

}
::placeholder{
	font-size:10px;
	color:white;
	font-family:verdana;
}
input[type=submit]{
	  height:30px;
	width:150px;
	margin-left:50px;
	border:3px solid transparent;
	cursor:pointer;
	font-size:20px;
	background-color:transparent;
	font-family:verdana;
	color:black;
}
</style>
</head>
<body>
<div class="topnav">
<div>
<ul class="u1">
  <li><a href="#contact">CONTACT US</a></li>
  <li><a href="#about">ABOUT US</a></li>
  <li><a href="#options">OPTIONS</a></li>
  <li><a href="#webdeveloper">WEB DEVELOPER</a></li>
</ul>
</div>
<div >
<br/><br/><br/><br/><br/><br/>
<h1 class="d1">WELCOME TO OUR WEBSITE</h1>
<p class="d2">Hope,You will get the job of your desire.</p> 
</div>
</div>
<div>
<h1 style="text-align:center; font-family:verdana; font-size:40px"><br/>Choose One Of The Options.<h1>
</div>
<div>
<span class="column">
<img src="resume.jpg" alt="resume" width="150px" height="150px" style="margin-left:auto; margin-right:auto;"><br/>
<p style="text-align:center;"><strong><u><a href="resume.html">RESUME SUBMIITION</a></u></strong><br/>submit your resume here.</p>
</span>
<span class="column">
<img src="view.jpg" alt="view your application" width="150px" height="150px"><br/>
<p style="text-align:center;"><strong><u><a id="a1">VIEW APPLIACTION STATUS</a></u></strong><br/>you can view your<br/>application.<br/></p>
<form method="POST" id="form1" ACTION="viewapp.php"><input type="number" placeholder="APPLICATION NUMBER" required name="appno"/>
<input type="submit"/></form>
</span>
<span class="column">
<img src="forgot.jpg" alt="forgot your application no." width="150px" height="150px"><br/>
<p style="text-align:center;"><strong><u><a id="a2">FORGOT APPLICATION NUMBER</a></u></strong><br/>retrieve your application number.<br/></p>
<form method="POST" id="form2" action="forgotapp"><input type="text" placeholder="FIRST NAME" required name="firstname"/>
<input type="text" placeholder="LAST NAME" required name="lastname"/>
<input type="email" placeholder="REGISTERED EMAIL" required name="email"/>
<input type="submit"/></form>
</span>
</div>
</body>
</html>