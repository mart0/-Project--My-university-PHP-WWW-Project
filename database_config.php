<?php
	//connect
	$mysqli =  new mysqli("localhost", "root", "", "weather_db");
 	//check connection
	if ($mysqli->connect_error) {
	    die("Failed to connect to MySQL: " 
	    		. $mysqli->connect_error);
	}

	$mysqli -> query("SET NAMES UTF8");
  
 