<?php  require_once "database_config.php";

	$ID=(int)$_GET['id'];
	//echo 'something';

	date_default_timezone_set('Europe/Sofia');
	$today = date('Y-m-d');
	
	$query="SELECT `weather_date`, `weather_temp`, `weather_humidity`, `weather_hour`
			 FROM `weather_data`
			 WHERE `location_id_location`='$ID' AND `weather_date`='$today' ";

	 $res = $mysqli->query($query)or die($mysqli->error);
		 if (!$res) {
			 echo 'Could not run query: ' ;
			 exit;
	}

	$query="SELECT `weather_date`, `weather_hour`
			 FROM `weather_data`
			 WHERE `location_id_location`='$ID' AND `weather_date`='$today' ";


	$res1 = $mysqli->query($query)or die($mysqli->error);
		 if (!$res) {
			 echo 'Could not run query: ' ;
			 exit;
	}

	$json=array('date'      => $today, 
				'temp' 		=> array(0 => 0 ,1 => 0, 2=> 0,3 => 0,4 => 0,5 => 0, 6 => 0, 7 => 0, 8 => 0,
									 9 => 0, 10 => 0, 11 => 0 ),
				'humidity'  => array(0 => 0 ,1 => 0, 2=> 0,3 => 0,4 => 0,5 => 0, 6 => 0, 7 => 0, 8 => 0,
									 9 => 0, 10 => 0, 11 => 0 ),
				'hour' 		=> array(0 => 0 ,1 => 0, 2=> 0,3 => 0,4 => 0,5 => 0, 6 => 0, 7 => 0, 8 => 0,
									 9 => 0, 10 => 0, 11 => 0 ));

	$i=0;
	while(($row = mysqli_fetch_row($res)) != null && ($row1 = mysqli_fetch_row($res1)) != null ){
		$json['temp'][$i]=$row[1];
		$json['humidity'][$i]=$row[2];
		$json['hour'][$i]=$row1[1];
		++$i;
	

	}
	echo json_encode($json);
	