<?php

try {

  $query =  " SQL statement query ... ";
  $query .= " second query";
  $query .= " 3 query";
  $query .= " 4 query";
  // for more when user needed;
  
  //for checking the query if there's lartge statement.
    echo "<div><p>";
    echo $query;
    echo "</p></div>";

  // 'odbc' -> for database type
  // 'Driver' -> for difference database it might be needed difference driver; e.g SQL server = 'sqlsrv:driver={sqlsrv driver ...};';
  // 'Server' -> equal with 'host'; after ',' meaning the port number;
  // 'Database' -> equal with 'dbname';
    $DSN = 'odbc:Driver={ODBC Driver 17 for SQL Server};
        Server=127.0.0.1,8888;Database=dbname;';

    //build connection with PDO
    $pdo_m = new PDO($DSN, '', '');

    $pdo_m ->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $pdo_m ->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo_m ->setattribute(PDO::ATTR_EMULATE_PREPARES, false);
  
    // Check connection - use F12
	  "BRIDGE BUILD! \n <hr />";

    $itemArray = array();
    // CODE, LOC, PRODUCT_TYPE, VOLUMN, UNIT, UP, flag
    
    $stmt = $pdo_m ->prepare($query);
    $stmt ->execute();
    
    // PDO statements for fetching data;
    $fetch_data = $stmt ->fetchall(PDO::FETCH_ASSOC);
    
    // output something if data is ready;
    echo "<hr> Data_Ready! <hr>";

}catch (\PDOException $e) {
    echo "</ br> Broke - mac: ". $e ->getMessage() ."</ br>";
}
