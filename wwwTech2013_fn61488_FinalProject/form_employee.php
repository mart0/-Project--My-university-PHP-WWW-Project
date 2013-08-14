<?php
require_once "database_config.php";

if(!empty($_POST)){
  
    $username = $_POST['user_name'];
    $username = $mysqli->real_escape_string($username);
    
    $password = $_POST['password'];
    $password = $mysqli->real_escape_string($password);

    $employee_name=$_POST['name'];
    $employee_name = $mysqli->real_escape_string($employee_name);

    $employee_email=$_POST['email'];
    $employee_email = $mysqli->real_escape_string($employee_email);

    $query="SELECT id_emp, user_emp_name
            FROM employee ";
     $res = $mysqli->query($query);
    while (($row = mysqli_fetch_row($res)) != null){                       
      if($row[1]==$username){
        echo false;
        exit(0);
      }
    }
    $result = $mysqli->query("INSERT INTO `employee` (`user_emp_name`,`employee_password`,`employee_name`,`employee_email`) VALUES ('$username',MD5('$password'),'$employee_name','$employee_email')") 
    or die($mysqli->error);
    echo true; 
 
}else{
    echo false;
}