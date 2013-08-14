<?php  require_once "database_config.php";

	$ID=(int)$_GET['id'];
	//echo 'something';

	date_default_timezone_set('Europe/Sofia');
	$today = date('Y-m-d');



	$query="SELECT `day_date`, `day_temp`, `day_humidity`
			 FROM `weather_day_data`
			 WHERE `id_location`='$ID' AND `day_date`='$today' 
			 LIMIT 1";

	 $res = $mysqli->query($query)or die($mysqli->error);
		 if (!$res) {
			 echo 'Could not run query: ' ;
			 exit;
	}

	$json= array(
			'date' 		  => 00-00-00,
		    'temperature' => 0,
		    'humidity'    => 0);

	//echo json_encode(array('' => , );)
	if(($row = mysqli_fetch_row($res)) != null){
		$json['date']=$today;
		$json['temperature']=$row[1];
		$json['humidity']=$row[2];
	// 	echo '<div class="weather_info">
	// <label for="date">Date:</label>
	// <span class="date">'.$today.'</span> <br/>
	// <label for="temperature" >Temperature: </label>
	// <span class="temperature">'.$row[1].'</span> <br/>
	// <label for="humidity">Humidity: </label>
	// <span class="humidity">'.$row[2].'</span>
	// <br/>
	// </div>';
	}
	echo json_encode($json);


	//echo $today;
	