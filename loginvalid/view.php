<?php
$name=$_POST['name'];
$password=$_POST['password'];
$con=mysqli_connect("localhost","root","","reg")or die("db not connected");
$que="select*from regform where name='$name'";
$res=mysqli_query($con,$que);
if($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
	if($row['password']==$password)
	{
		echo"<script>alert('login sucess');windows.location.href='login';</script>";
	}
	else
	{
		echo"<script>alert('invalid password');windows.location.href='login'</script>";
	}
}
else
{
			echo"<script>alert('invalid username');windows.location.href='login'</script>";
}
?>
<html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.bundle.min">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="bootstrap/js/jquery.min">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">

	<table class="table table-bordered table-hover " >
		<thead class="table-dark">
				<th>firstname</th>
				<th>lastname</th>
				<th>password</th>
				<th>repassword</th>
				<th>email</th>
				<th>phnno</th>
				<th>address</th>
				<th>gender</th>
				<th>hobby</th>
				<th>dob</th>
				<th>country</th>
				</thead>
<tbody> 
<?php
$server="localhost";
$uname="root";
$pwd="";
$db="reg";
$con=mysqli_connect("$server","$uname","$pwd","$db")or die("db not connected");
$que="select * from regform where name='$name'";
$res=mysqli_query($con,$que);
while($row=mysqli_fetch_array($res))
{
	echo"<tr>";

	echo"<td>".$row[0]."</td>";
	echo"<td>".$row[1]."</td>";
	echo"<td>".$row[2]."</td>";
	echo"<td>".$row[3]."</td>";
	echo"<td>".$row[4]."</td>";
	echo"<td>".$row[5]."</td>";
	echo"<td>".$row[6]."</td>";
	echo"<td>".$row[7]."</td>";
	echo"<td>".$row[8]."</td>";
	echo"<td>".$row[9]."</td>";
	echo"<td>".$row[10]."</td>";
	echo"</tr>";
}
?>
</tbody>
</tabel>
</html></table></div></div></div></body></html></html>