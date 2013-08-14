<?php  require_once "database_config.php";
if(!empty($_GET)){
	$ID=(int)$_GET['id'];
	//echo $ID;

	date_default_timezone_set('Europe/Sofia');
	$today = date('Y-m-d');
	$fivedays_from_today=date('Y-m-d',strtotime("+5 days"));
//echo $today;
	
	$day=date('Y-m-d');
	//$next_day=date('Y-m-d',strtotime("+1 day"));



	$query1="SELECT  `day_date` ,  `day_temp` ,  `day_humidity` 
			 FROM  `weather_day_data` 
             WHERE  `id_location`='$ID' 
             ORDER BY `day_date` ASC";
	 $res1 = $mysqli->query($query1)or die($mysqli->error);
		 if (!$res1) {
			 echo 'Could not run query: ' ;
			 exit;
	}




	// $query2="SELECT `day_date`, `day_temp`, `day_humidity`
	// 			 FROM `weather_day_data`
	// 			 WHERE `id_location`='$ID' AND `day_date`='$next_day' 
	// 			 LIMIT 1";

	// $res2 = $mysqli->query($query2)or die($mysqli->error);
	// 		 if (!$res) {
	// 			 echo 'Could not run query: ' ;
	// 			 exit;
	// 	}

	$query3="SELECT `start_date`, `final_date`
				 FROM `employee_has_location`
				 WHERE `location_id_location`='$ID' 
				 ORDER BY `start_date` DESC";
//AND `employee_id_emp`='$id_emp' */
	$res3 = $mysqli->query($query3)or die($mysqli->error);
			 if (!$res3) {
				 echo 'Could not run query: ' ;
				 exit;
		}

	$json=array('date'      => array(0 => 0 ,1 => 0, 2=> 0,3 => 0,4 => 0), 
				'temp' 		=> array(0 => 0 ,1 => 0, 2=> 0,3 => 0,4 => 0 ),
				'humidity'  => array(0 => 0 ,1 => 0, 2=> 0,3 => 0,4 => 0 ));

	
	$rows = array();
	$row =mysqli_fetch_all($res1, MYSQLI_ASSOC);
	$row1=mysqli_fetch_all($res3, MYSQLI_ASSOC);
	// foreach ($row1 as $value)  {
	//   	echo $value;
	//  }
	$final_date=$row1[0]['final_date'];
	//var_dump($final_date);
	$todays_date=$today;
	//var_dump($row);
	//($row1);
	$json['date'][0]=$today;
	$json['temp'][0]=$row[0]['day_temp'];
	$json['humidity'][0]=$row[0]['day_humidity'];
	$date=0;
	$c=0;
	$i=0;
	$date=$row[$i]['day_date'];
	//var_dump($date);
	while($date<$today && $i<5){
		//var_dump($i);
		//var_dump($c);
		$date=$row[$i]['day_date'];
			++$i;
			++$c;
			//var_dump($date);
	}
	$p=$i;
	$k=1;
	while($k<5){
		
		//if(($row[$c])!=null && ($row1)!=null){
		//$results[] = $row['day_date'];
		
			
			//var_dump($results);strtotime
				if(($date=$row[$p]['day_date'])!=null){
				//var_dump($date);
				if( $date <= $final_date){
					if(($row[$p]['day_temp'])!=null && ($row[$p]['day_humidity'])!=null){
					$json['date'][$k]=$date;
					//$json['date'][$c]=strtotime($json['date'][$c]);
					$json['temp'][$k]=$row[$p]['day_temp'];
					$json['humidity'][$k]=$row[$p]['day_humidity'];
					}
				}}
				// }else{
				// 	// while($date<=$today && $i<5){
				// 	// 	++$i;
				// 	// 	var_dump($i);
				// 	// 	$date=$row[$i]['day_date'];
				// 	// 	var_dump($date);
				// 	// 	var_dump($c);
				// 	// 	++$c;
						
				// 	// }
				// 	$json['date'][$i-$c]=$date;
				// 	$json['temp'][$i-$c]=$row[$i-$c]['day_temp'];
				// 	$json['humidity'][$i-$c]=$row[$i-$c]['day_humidity'];
					
						
				// }
					//  $json['date'][$i]=date('Y-m-d',strtotime("+1 day"));
					// // //$json['date'][$c]=strtotime($json['date'][$c]);
					// // $json['temp'][$c]=$row[--$c]['day_temp'];
					// // $json['humidity'][$c]=$row[--$c]['day_humidity'];
		++$p;		
++$k;
		
	
}
//header('Content-Type: application/json');
echo json_encode($json);
}else{
	echo "get is empty ";
}
