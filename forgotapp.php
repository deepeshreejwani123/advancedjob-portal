<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'jobinfo');
$q="select * from info where firstname='$firstname' and lastname='$lastname'and email='$email';";
$result=mysqli_query($con,$q);
mysqli_close($con);
$a=mysqli_fetch_array($result);
?>
<!doctype html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#a1").click(function(){
   	$("table").show();
  });
});
</script>
<style>
body{
	background-image:url('image4.jpg');
	background-repeat:no-repeat;
	background-attachment:fixed;
	overflow:scroll;
}
h1,h2{
	font-family:verdana;
	text-align:center;
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
table{
	border:3px solid black;
	font-family:verdana;
	margin-left:400px;
	font-weight:bold;
	display:none;
	width:50%;
}
table tr,th{
	text-align:center;
	padding:10px 40px;
}
</style>
</head>
<body>
<?php 
echo count($a);
?>
<h1>YOU HAVE SUCCESSFULLY RETREIVED YOUR APPLICATION NUMBER</h1><br>
<h2><?php
echo "YOUR APPLICATION NUMBER IS ",$a['application_id'];
?></h2>
<h2 style="text-align:center;"><a id="a1">WANT TO SEE YOUR APPLICATION STATUS</a></h2>
<table>
<tr>
<th>Application no.</th>
<th><?php echo $a['application_id'] ?></th>
</tr>
<tr>
<th>First Name</th>
<th><?php echo $a['firstname'] ?></th>
</tr>
<tr>
<th>Last Name</th>
<th><?php echo $a['lastname'] ?></th>
</tr>
<tr>
<th>Age</th>
<th><?php echo $a['age'] ?></th>
</tr>
<tr>
<th>Gender</th>
<th><?php echo $a['gender'] ?></th>
</tr>
<tr>
<th>Date Of Birth</th>
<th><?php echo $a['date_of_birth'] ?></th>
</tr>
<tr>
<th>Email</th>
<th><?php echo $a['email'] ?></th>
</tr>
<tr>
<th>Current Address</th>
<th><?php echo $a['current_address'] ?></th>
</tr>
<tr>
<th>Current City</th>
<th><?php echo $a['current_city'] ?></th>
</tr>
<tr>
<th>Current State</th>
<th><?php echo $a['current_state'] ?></th>
</tr>
<tr><th>Current Country</th>
<th><?php echo $a['current_country'] ?></th>
</tr>
<tr>
<th>Stream</th>
<th><?php echo $a['stream'] ?></th>
</tr>
<tr>
<th>Job Country</th>
<th><?php echo $a['job_country'] ?></th>
</tr>
<tr>
<th>Percent in 10th</th>
<th><?php echo $a['per_c10'] ?></th>
</tr>
<tr><th>Percent in 12th</th>
<th><?php echo $a['per_c12'] ?></th>
</tr>
<tr>
<th>College Name</th>
<th><?php echo $a['college_name'] ?></th>
</tr>
<tr>
<th>College Address</th>
<th><?php echo $a['college_address'] ?></th>
</tr>
<tr>
<th>Skills</th>
<th><?php echo $a['skills'] ?></th>
</tr>
<tr>
<th>Year Of Passing</th>
<th><?php echo $a['year_of_passing'] ?></th>
</tr>
</table>
</body>
</html>