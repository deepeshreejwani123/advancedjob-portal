<?php
$appno=$_POST['appno'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'jobinfo');
$q="select * from info where application_id=$appno;";
$result=mysqli_query($con,$q);
mysqli_close($con);
$a=mysqli_fetch_array($result);
?>
<!doctype html>
<html>
<head>
<style>
body{
	background-image:url('image4.jpg');
	background-repeat:no-repeat;
	background-position:fixed;
}
h1{
	text-align:center;
}
table{
	border:3px solid black;
	font-family:verdana;
	margin:auto;
}
table tr,th{
	text-align:center;
	padding:10px 10px;
}
</style>
</head>
<body>
<?php 
if($a['appilcation_id']==NULL)
header('https://localhost/job%20portal/home.php');
?>
<h1>YOUR APPLICATION STATUS INFO IS:</h1>
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
<footer style="color:white; margin-top:50px;">
Copyright <?php echo "&copy;".date("Y");?>
</footer>
</body>
</html>