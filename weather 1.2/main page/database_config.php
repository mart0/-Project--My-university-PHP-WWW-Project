<?php
	// database configuration goes here
	// it's a good idea to keep this file outside your document root
	
	// server, user, password, database name


$db = mysql_connect("localhost", "root", "") or die(mysql_error());

mysql_select_db("weather_db", $db) or die(mysql_error());


 