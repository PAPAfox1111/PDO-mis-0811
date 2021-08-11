<?php

$DSN = 'mysql:dbname=xxxx;host=xxxx;charset=UTF8';

//$mysqli
//$mysqli = mysqli_connect('localhost','xxx','xxxx','xxxx');
//$mysqli = new mysqli('localhost','xxx','xxxx','xxxx');  // for PHP 7

try{
	$username = "misxxxx";
	$password = "maxxxxxxx";	

	$dbconn = new PDO($DSN, $username, $password);
	$dbconn -> setattribute(PDO::ATTR_EMULATE_PREPARES, false);

	$dbconn -> setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	$dbconn -> setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	if(mysqli_connect_errno()) {
		//echo "Database connect error: " . mysqli_connect_error();
		header("Location:https://www.xxx.com/error.php?err=dbconnect");
		//exit();
		die();
	}
}
catch(PDOException $e){
	echo "Broke:" . $e->getMessage();

}
