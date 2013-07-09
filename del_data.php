<?php
    include_once('database_config.php');
    session_start();
    $userID=$_SESSION['user_id'];
    if(!empty($_POST)){
    	$date = $_POST['date'];
	    $date = $mysqli->real_escape_string($date);
        list($loc_id, $loc_name) = explode('|', $_POST['location']);
	    $hours=$_POST['hours'];
        $flag=false;
        if($hours=="" || $humidity=="" || $temperature=="" || $date==""){
            echo false;
        }else{
            $query="SELECT  start_date, final_date
                        FROM employee_has_location 
                        WHERE employee_id_emp='$userID'
                        AND location_id_location='$loc_id'";
            $res = $mysqli->query($query) or die($mysqli->error);
            while(($row = mysqli_fetch_row($res)) != null){
                if($row[0]<=$date && $date<=$row[1]){
                    $flag=true;   
                    }
            }

            if($flag==true){
                $query="SELECT  *
                        FROM weather_data 
                        WHERE location_id_location='$loc_id '
                        AND `weather_hour`='$hours' 
                        AND weather_date='$date'";
                $res = $mysqli->query($query)or die($mysqli->error);
                                     
                if(($row = mysqli_fetch_row($res)) == null){
                    echo false;
                    //exit();
                }else{
            	    $result = $mysqli->query("DELETE FROM `weather_data` 
            	    						WHERE `weather_date`='$date' 
            	    						AND `weather_hour`='$hours' 
            	    						AND `location_id_location`='$loc_id'") 
                	or die($mysqli->error);
                	echo true;
            	}
            }
        }
    }else{
    	echo false;
    }