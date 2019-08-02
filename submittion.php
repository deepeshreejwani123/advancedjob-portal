<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$dob=$_POST['dob'];
$age=$_POST['age'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$Caddress=$_POST['Caddress'];
$Ccity=$_POST['Ccity'];
$Cstate=$_POST['Cstate'];
$Ccountry=$_POST['Ccountry'];
$Jcountry=$_POST['Jcountry'];
$stream=$_POST['stream'];
$class10=$_POST['class10'];
$class12=$_POST['class12'];
$clgname=$_POST['clgname'];
$clgadd=$_POST['clgadd'];
$yop=$_POST['yop'];
$skills=$_POST['skills'];
$f=$_FILES['f1'];
if($f['type']=="application/pdf"&& $f['size']<=500000)
{
$con=mysqli_connect('localhost','root');
mysqli_query($q,"create database jobinfo;");
mysqli_select_db($con,'jobinfo');
$r="create table info(
application_id int(5) primary key auto_increment not null,
firstname varchar(50) not null,
lastname varchar(50) not null,
age int(5) not null,
gender varchar(10) not null,
date_of_birth varchar(13) not null,
email varchar(100) not null,
current_address varchar(200) not null,
current_city varchar(200) not null,
current_state varchar(200) not null,
current_country varchar(200) not null,
stream varchar(200) not null,
job_country varchar(200) not null,
per_c10 double(8,5) NOT NULL,
per_c12 double(8,5) NOT NULL,
college_name varchar(200) NOT NULL,
college_address varchar(200) NOT NULL,
skills varchar(200) NOT NULL,
year_of_passing int(5) NOT NULL
);";
mysqli($con,$r);
$q="insert into info(firstname,lastname,age,gender,date_of_birth,email,current_address,current_city,current_state,current_country,stream,job_country,per_c10,per_c12,college_name,college_address,skills,year_of_passing)
values('$firstname','$lastname',$age,'$gender',$dob,'$email','$Caddress','$Ccity','$Cstate','$Ccountry','$stream','$Jcountry',$class10,$class12,'$clgname','$clgadd','$skills',$yop);";
$test=mysqli_query($con,$q);
$result=mysqli_query($con,"select * from info where firstname='$firstname';");
mysqli_close($con);
$a=mysqli_fetch_array($result);
move_uploaded_file($f['temp_name'],"resumes/".$f['name']);
}
else{ 
	$test=0;
    $a=NULL;
}
?>
<!Doctype html>
<html>
<head>
<title>
FORM SUBMITTED
</title>
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  overflow:hidden;
}
* {
  box-sizing: border-box;
}
#blurdiv1{
  background: linear-gradient(to left,green,red);
  filter: blur(7px);
  height: 100%; 
  background-position: center;
  background-repeat: repeat;
  background-attachment:fixed;
  overflow:scroll;
}
#maindiv{
  background-color: rgb(0,0,0)
  background-color: rgba(0,0,0, 0.4);
  color: white;
  font-weight: bold;
  border: 3px solid black;
  position: absolute;
  top: 10%;
  left: 5%;
  z-index:3;
  width: 90%;
  height:70%;
  text-align: center;
}
h1{
	font-weight:bold;
	font-size:50px;
}
a{
	text-decoration:none;
	font-size:30px;
	color:white;
}
a:hover{
	cursor:pointer;
	color:black;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div id="blurdiv1"></div>
<div id="maindiv">
<h1>APPLICATION STATUS</h1><br>
<h2><?php if($test==1)
    {
         echo "RECORD INSERTED";?><br><br><?php
	echo  "YOUR APPLICATION NO. IS ".$a['application_id'];}
	  if($test!=1)
	  {
        echo  "RECORD NOT INSERTED";?><br><br><?php
        echo "UPLOADED FILE FORMAT IS NOT VALID PLEASE TRY AGAIN!!";
	  }		
?>
</h2>
<a href="resume.html">
<?php 
    if($test==1)
		echo "WANT TO SUMBIT ANOTHER FORM";
	else
		echo "WANT TO TRY AGAIN";
?></a>
</div>
</body>
</html>