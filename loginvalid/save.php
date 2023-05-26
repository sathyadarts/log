
<?php
$server = "localhost";
$uname="root";
$pwd= "";
$db="reg";
$con=mysqli_connect($server,$uname,$pwd,$db)or die("db not connected");
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
$email=$_POST['email'];
$phnno=$_POST['phnno'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$hobby=$_POST['hobby'];
$dob=$_POST['dob'];
$country=$_POST['country'];
$query="insert into regform values ('$name','$lastname','$password','$repassword','$email','$phnno','$address','$gender','$hobby','$dob','$country')";
if($res=mysqli_query($con,$query))
{
	echo"<script>alert('data savedsuccesfully');window.location.href='reg.php';</script>";
}
else

{
	echo"<script>alert('data unsuccesfully');window.location.href='reg.php';</script>";
}

?>