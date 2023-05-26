<?php
$server="localhost";
$uname="root";
$pwd="";
$db="reg";
$con=new PDO("mysql:host=$server;dbname=$db",$uname,$pwd);
	$query="select * from regform";
	$stmt=$con->prepare($query);
	$stmt->execute();
	$row=$stmt->fetchAll();
	echo"<table></th><th>name</th><th>lastname</th><th>password</th><th>repassword</th><th>email</th><th>phnno</th><th>address</th><th>gender</th><th>hobby</th><th>dob</th><th>country</th></tr>";
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
		
		echo"<tr><td></tr>;
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
	?></thead></table></div></div></div></body></html></html>
