<?php 
	
	session_start();
	//$userID=$_SESSION['user_id'];
	if(isset($_SESSION['user_id'])){
		$userID=$_SESSION['user_id'];
		//var_dump($_SESSION['user_id']);			
		echo true ;
		

	}else{
		// session_unset();
	 //    session_destroy(); 
	    header("Location: login.php");
	    echo false;
	}


	
