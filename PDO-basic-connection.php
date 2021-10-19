<?php

try {
	// setting new DSN of database;
	// README :
	// in DSN it had 3 parts information of databse
	// 'mysql' -> target database type, it could be MYSQL / SQLSRV / ODBC / ETC;
	// 'host' -> target database address, when local it could be 'localhost';
	// 'dbname' -> target database name;
	// 'cartset' -> usally would be UTF8;
	
	$DSN = 'mysql:host=127.0.0.1; 
		dbname=database;
		chartset=UTF8';

	$username = 'database-username';
	$password = 'database-user-password';

	// build connection with database;
	$pdo = new PDO($DSN, $username, $password);

	// always add on WARNING && EXCEPTION
	$pdo ->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	$pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	// the ATTR_EMULATE_PREPARES -> emulation of prepared statements
	// most of the time would be 'FALSE'
	// either for security or the system porper function 'FALSE' would be better;
	$pdo ->setattribute(PDO::ATTR_EMULATE_PREPARES, false);
	
	// Check connection - F12
	echo "BRIDGE BUILD! \n <hr />";
	
} catch (PDOException $e) {
	echo "</ br> Broke: " . $e->getMessage();
}
