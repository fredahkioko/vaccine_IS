<?php

define("HOSTNAME", "localhost");
define("HOSTUSER", "root");
define("HOSTPASS", "");
define("DBNAME", "vaccine");


// Create connection
$dbConn = new mysqli(HOSTNAME, HOSTUSER, HOSTPASS, DBNAME);

// Check connection
if ($dbConn->connect_error) {
	die("Connect Failed: " . $dbConn->connect_error);
}else{
	//print "The connection was successfull ";
}
?>