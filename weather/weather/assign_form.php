<?php 
require_once "database_config.php";
if(!empty($_POST)){
	list($loc_id, $loc_name) = explode('|', $_POST['location']);
	list($emp_id, $emp_name) = explode('|', $_POST['employees']);


	$result = $mysqli->query("INSERT INTO `employee_has_location` (`location_id_location`, `employee_id_emp`) 
							  VALUES ('$loc_id','$emp_id')") 
    or die($mysqli->error);
}

	

