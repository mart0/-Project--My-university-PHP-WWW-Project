<?php  require_once "database_config.php";

	$ID=(int)$_GET['id'];
	//echo 'something';

	date_default_timezone_set('Europe/Sofia');
	$today = date('Y-m-d');
	
	$query="SELECT `weather_date`, `weather_temp`, `weather_humidity`, `weather_hour`,`image_hour_id`
			 FROM `weather_data`
			 WHERE `location_id_location`='$ID' AND `weather_date`='$today' 
			 ORDER BY `weather_hour` ASC";

	 $res = $mysqli->query($query)or die($mysqli->error);
		 if (!$res) {
			 echo 'Could not run query: ' ;
			 exit;
	}

	$query="SELECT `weather_date`, `weather_hour`
			 FROM `weather_data`
			 WHERE `location_id_location`='$ID' AND `weather_date`='$today' 
			 ORDER BY `weather_hour` ASC";


	$res1 = $mysqli->query($query)or die($mysqli->error);
		 if (!$res) {
			 echo 'Could not run query: ' ;
			 exit;
	}

	$json=array('date'      => $today, 
				'temp' 		=> array(0 => null ,1 => null, 2=> null,3 => null,4 => null,5 => null, 6 => null, 7 => null, 8 => null,
									 9 => null, 10 => null, 11 => null ),
				'humidity'  => array(0 => null ,1 => null, 2=> null,3 => null,4 => null,5 => null, 6 => null, 7 => null, 8 => null,
									 9 => null, 10 => null, 11 => null ),
				'hour' 		=> array(0 => 0 ,1 => 0, 2=> 0,3 => 0,4 => 0,5 => 0, 6 => 0, 7 => 0, 8 => 0,
									 9 => 0, 10 => 0, 11 => 0 ),
				'image_id' 	=> array(0 => 0 ,1 => 0, 2=> 0,3 => 0,4 => 0,5 => 0, 6 => 0, 7 => 0, 8 => 0,
									 9 => 0, 10 => 0, 11 => 0 ));

	$i=0;
	while(($row = mysqli_fetch_row($res)) != null && ($row1 = mysqli_fetch_row($res1)) != null ){
		
		$json['temp'][$i]=$row[1];
		$json['humidity'][$i]=$row[2];
		$json['image_id'][$i]=$row[4];
		$json['hour'][$i]=$row1[1];
		// if($i==5 ||  $i==6){
		// 	$json['temp'][$i]=null;
		// }
		++$i;

	

	}
	echo json_encode($json);
	