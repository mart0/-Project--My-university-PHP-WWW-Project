<?php 
require_once "database_config.php";
if(!empty($_POST)){
	var_dump($_POST);
    list($emp_id,$emp_name) = explode('|',$_POST['employees']);
   
        $result = $mysqli->query("DELETE FROM `employee` WHERE `id_emp`=$emp_id ;")
        or die($mysqli->error);
        echo 'Employee deleted';
  
}else{
	echo "Post is empty";
}
