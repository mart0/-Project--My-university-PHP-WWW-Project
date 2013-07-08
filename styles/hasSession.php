<?php

// session_start();
// $is_logged=isset($_SESSION['SESS_MEMBER_ID']);
// // echo isset($_SESSION['SESS_MEMBER_ID'];
// 	// var_dump($is_logged);
// 	echo $is_logged;
session_start();
$sessin = isset($_SESSION['SESS_MEMBER_ID']);
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // if last request was more than 30 minutes ago
    session_unset();
    echo false;     // unset $_SESSION variable for the run-time 
    header("location: #login");
    session_destroy();   // destroy session data in storage
}
else{
	$_SESSION['LAST_ACTIVITY'] = time();
	echo $sessin;
}