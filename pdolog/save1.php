<?php
$server="localhost";
$uname="root";
$pwd="";
$db="reg";
try
{
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

$con=new PDO("mysql:host=$server;dbname=$db",$uname,$pwd);

	$query="insert into regform(name,lastname,password,repassword,email,phnno,address,gender,hobby,dob,country)values(:name,:lastname,:password,:repassword,:email,:phnno,:address,:gender,:hobby,:dob,:country)";
	
	$stmt=$con->prepare($query);

	if($stmt->execute([':name'=>$name,':lastname'=>$lastname,':password'=>$password,':repassword'=>$repassword,':email'=>$email,':phnno'=>$phnno,':address'=>$address,':gender'=>$gender,':hobby'=>$hobby,':dob'=>$dob,':country'=>$country]))
	{
		echo"<script>alert('saved');</script>";
	}
	else
	{
		echo"<script>alert('error');</script>";
	}
	
}
catch(PDOExeception $e)
{
	echo $e->getMessage();

}
?>