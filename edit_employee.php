<?php 
require_once "database_config.php";
if(!empty($_POST)){
    list($emp_id, $emp_name) = explode('|', $_POST['employees']);
    
    $password = $_POST['password'];
    $password = $mysqli->real_escape_string($password);

    $employee_name=$_POST['name'];
    $employee_name = $mysqli->real_escape_string($employee_name);
    $emp_name=$mysqli->real_escape_string($emp_name);

    $employee_email=$_POST['email'];
    $employee_email = $mysqli->real_escape_string($employee_email);

    $result = $mysqli->query("UPDATE `employee` SET `employee_name`='$employee_name',
    	`employee_password`= MD5('$password'),`employee_email`='$employee_email' WHERE `id_emp`=$emp_id ;") 
    or die($mysqli->error);
    echo 'Employee edited';
  
}
