<?php
session_start();
$server="localhost";
$uname="root";
$pwd="";
$db="reg";
$con=new PDO("mysql:host=$server;dbname=$db",$uname,$pwd);
	$name=$_POST['name'];
     $password=$_POST['password'];
	$query="select * from regform where name=:name and password=:password";
	$stmt=$con->prepare($query);
	$stmt->execute(array('name'=>$_POST["name"],'password'=>$_POST["password"]));
	$data=$stmt->fetch(PDO::FETCH_ASSOC);
	if($data==false)
	{
		if($password==$data['password'])
		{

		echo"<script>alert('login sucess');windows.location.href='view.php';</script>";
	}

	else

	{
			echo"<script>alert('invalid password');</script>";

	}
}

?>
<html>
<body>
	<?php
$server="localhost";
$uname="root";
$pwd="";
$db="reg";
$con=new PDO("mysql:host=$server;dbname=$db",$uname,$pwd);
	$query="select * from regform where name='$name'";
	$stmt=$con->prepare($query);
	$stmt->execute();
	$row=$stmt->fetchAll();
	echo"<table><tr><th></th><th>name</th><th>lastname</th><th>password</th><th>repassword</th><th>email</th><th>phnno</th><th>address</th><th>gender</th><th>hobby</th><th>dob</th><th>country</th></tr>";
	foreach($row as $value)
	{

		$name=$value[0];
		$lastname=$value[1];
		$password=$value[2];
        $repassword=$value[3];
        $email=$value[4];
        $phnno=$value[5];
        $address=$value[6];
        $gender=$value[7];
        $hobby=$value[8];
        $dob=$value[9];
        $country=$value[10];
		
		echo"<tr><td></td>;
		<td>.$name.</td>;
		<td>.$lastname.</td>;
		<td>.$password.</td>;
		<td>.$repassword.</td>;
		<td>.$email.</td>;
		<td>.$phnno.</td>;
		<td>.$address.</td>;
		<td>.$gender.</td>;
		<td>.$hobby.</td>;
		<td>.$dob.</td> 
		<td>.$country.</td>;</tr>";
	}
	echo"</table>";
	?>
</body>
</html>

	
