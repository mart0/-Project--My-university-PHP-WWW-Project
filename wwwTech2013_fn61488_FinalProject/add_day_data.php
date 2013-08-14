<?php
    include_once('database_config.php');
    if(!empty($_POST)){
    	
    	$date = $_POST['date'];
	    $date = $mysqli->real_escape_string($date);
	    
	    $temperature = $_POST['temperature'];
	    $temperature = $mysqli->real_escape_string($temperature);

	    $humidity=$_POST['humidity'];
	    $humidity = $mysqli->real_escape_string($humidity);

	    list($loc_id, $loc_name) = explode('|', $_POST['location']);
	    
	    $result = $mysqli->query("INSERT INTO `weather_day_data`(`id_location`, `day_date`, `day_temp`, `day_humidity`) VALUES ('$loc_id', '$date', '$temperature', '$humidity')") 
    	or die($mysqli->error);
    	
    		echo "success";
   }else{
    		echo "fail";
   }

    