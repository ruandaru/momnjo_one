<?php

// Connection variables 
$host = "localhost"; // MySQL host name eg. localhost
$user = "root"; // MySQL user. eg. root ( if your on localserver)
$password = ""; // MySQL user password  (if password is not set for your root user then keep it empty )
$database = "posapp"; // MySQL Database name

// Connect to MySQL Database
$con = new mysqli($host, $user, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

date_default_timezone_set('Asia/Jakarta');
	$datetime_set	=date('Y-m-d H:i:s');
	$date_set		=date('Y-m-d');
	$time_set		=date('H:i:s');

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 

?>