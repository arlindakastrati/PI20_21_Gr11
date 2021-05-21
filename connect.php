<?php
  session_start();
	error_reporting(E_ERROR | E_PARSE);
	$host = "localhost";
	$user = "root";
	$password = "";
	$dbname = "register";
	$port = "3307";

	try {
	    $con = new  PDO("mysql:host=$host;port=$port;dbname=$dbname",$user,$pass);
	} catch (PDOException $e) {
		echo "not connected" . $e->getMessage();
	}

?>




