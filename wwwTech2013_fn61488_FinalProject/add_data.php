<?php
    include_once('database_config.php');
    if(!empty($_POST)){
    	echo true;
    	$date = $_POST['date'];
	    $date = $mysqli->real_escape_string($date);
	    
	    $temperature = $_POST['temperature'];
	    $temperature = $mysqli->real_escape_string($temperature);

	    $humidity=$_POST['humidity'];
	    $humidity = $mysqli->real_escape_string($humidity);

	    $hours=$_POST['hours'];
	    $hours = $mysqli->real_escape_string($hours);

	    list($loc_id, $loc_name) = explode('|', $_POST['location']);
	    
	  //  var_dump($loc_id);
	   // $query=" SELECT * FROM weather_data WRERE()";
	    $result = $mysqli->query("INSERT INTO `weather_data` (`weather_date`,`weather_temp`,`weather_humidity`,
	    	`weather_hour`,`location_id_location`) VALUES ('$date','$temperature','$humidity','$hours','$loc_id')") 
    	or die($mysqli->error);
    	
    		
    	}else{
    		echo false;
    	}
    