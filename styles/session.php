<?php
//Start session
	session_start();

require_once "database_config.php";

	
 
	//Array to store validation errors
	$errmsg_arr = array();
 
	//Validation error flag
	$errflag = false;
 
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
 
	//Sanitize the POST values
	$username = clean($_POST['nickName']);
	$password = clean(md5($_POST['password']));
 
	//Input Validations
	if($username == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
 
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../login.php");
		exit();
	}
 
	//Create query
	$qry="SELECT * FROM user WHERE nick_name='$username' AND password='$password'";
	$result=$mysqli -> query($qry);
	// var_dump($result);
	$res = mysqli_fetch_array($result);
	// var_dump($res);
 
	//Check whether the query was successful or not
	if($res) {

		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			var_dump(mysqli_num_rows($result));
			
			session_regenerate_id();
			
			// var_dump($res);
			$_SESSION['SESS_MEMBER_ID'] = $res['id'];
			
			// var_dump($_SESSION['SESS_MEMBER_ID']);
			$_SESSION['SESS_FIRST_NAME'] = $res['nick_name'];
			$_SESSION['SESS_LAST_NAME'] = $res['password'];
			// var_dump($_SESSION['SESS_LAST_NAME']);
			// var_dump($_SESSION);
			
			session_write_close();
			header("location: ../logged.php");
			

			exit();
		}

		// else {
		// 	// //Login failed
		// 	// echo "aaaaaaaaaaaaaaaaaa";
		// 	// $errmsg_arr[] = 'user name and password not found';
		// 	// $errflag = true;
		// 	// if($errflag) {
		// 	// 	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		// 	// 	session_write_close();
		// 	// 	header("location: ../login.php");
		// 	// 	exit();
		// 	// }
		// }
	}else {
		// die("Query failed");
		//Login failed
			 echo "User name or password not found.";
			// $errmsg_arr[] = 'user name and password not found';
			// $errflag = true;
			// if($errflag) {
			// 	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();

				header("location: ../login.php");

				exit();
			// }
}
