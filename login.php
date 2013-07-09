<?php
        include_once('database_config.php');
 
		$username = $mysqli->real_escape_string($_POST["username"] );
		$password = $mysqli->real_escape_string( md5($_POST["password"]) );
 
		if( empty($username) || empty($password) )
			echo "Username and Password Mandatory - from PHP";
		else
		{
			$sql = "SELECT `id_emp`, `user_emp_name` 
					FROM `employee` 
					WHERE `user_emp_name` = '$username'
					AND `employee_password` = '$password'
					LIMIT 1";
	 
	 		$sql1 = "SELECT `id`, `name`, `password`
					FROM `admin` 
					WHERE `name` = '$username'
					AND `password` = '$password'
					LIMIT 1";
		    $res = $mysqli->query($sql) or die($mysqli->error);

		    if ($res->num_rows > 0) {
		    	$row=$res->fetch_assoc();
		    	session_start();
		    	//$_SESSION['isLogged'] = true;
		    	$_SESSION['user_id'] = $row['id_emp'];
		    	//echo  $_SESSION['user_id'];
		    	header("Location: employee_form.php");
	    	
	    } else {
	    	$res = $mysqli->query($sql1)or die($mysqli->error);
	   		 	if ($res->num_rows > 0) {
			    	$row=$res->fetch_assoc();
			    	session_start();
			    	//$_SESSION['isLogged'] = true;
			    	$_SESSION['admin_id'] = $row['id'];
			    	//echo  $_SESSION['user_id'];
			    	header("Location: admin_form.php");
			    	
			    }else{
			    	echo "Wrong username and password";
			    	}	
	    }

mysqli_close($mysqli);

}

