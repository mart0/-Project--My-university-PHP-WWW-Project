<?php  
session_start();
require_once "database_config.php";
$id=$_SESSION['user_id'];
//var_dump($_SESSION);
$q="SELECT * 
	FROM  `employee_has_location` 
	INNER JOIN  `location` 
	ON  `employee_has_location`.location_id_location = id_location
	AND  `employee_id_emp` =$id" ;

	$res = $mysqli->query($q);
	if (!$res) {
		echo 'Could not run query: ' . $mysqli->error();
		 exit;
	}

	$locations=array('name'    => array(), 
						'id' 	=> array());
	$i=0;
	while (($row = mysqli_fetch_assoc($res)) != null){
		//echo $row['location_name'];
		$locations['name'][$i]=$row['location_name'];
		$locations['id'][$i]=$row['id_location'];
		++$i;
	}
	echo json_encode($locations);
