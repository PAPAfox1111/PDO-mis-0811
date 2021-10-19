<?php

try {
	// setting new DSN of database;
	// 
	$DSN = 'mysql:host=127.0.0.1; 
		dbname=database;
		chartset=UTF8';

	$username = 'database-username';
	$password = 'database-user-password';

	// build connection with database;
	$pdo = new PDO($DSN, $username, $password);

	$pdo ->setattribute(PDO::ATTR_EMULATE_PREPARES, false);
	$pdo ->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	$pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// Check connection - F12
	echo "BRIDGE BUILD! \n <hr />";
	
} catch (PDOException $e) {
	echo "</ br> Broke: " . $e->getMessage();
}
