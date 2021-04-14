<?php
$dbhost = "localhost"; 		// The host of your database
$dbuser = "root"; 			// The database username
$dbpass = "toor"; 	        // The database password
$dbname = "hotwheels"; 	// The database name

$odb = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
$odb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

?>