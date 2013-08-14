<?php 
require_once "database_config.php";
if(!empty($_POST)){
	list($loc_id, $loc_name) = explode('|', $_POST['location']);
	list($emp_id, $emp_name) = explode('|', $_POST['employees']);
	$start_date=$_POST['start_date'];
	$final_date=$_POST['final_date'];
	$result = $mysqli->query("INSERT INTO `employee_has_location` (`location_id_location`, `employee_id_emp`, `start_date`, `final_date`) 
							  VALUES ('$loc_id','$emp_id','$start_date','$final_date')") 
    or die($mysqli->error);
    echo true;
}else{
	echo false;
}

	

