<?php
    include_once('database_config.php');
    if(!empty($_POST)){
    	$date = $_POST['date'];
	    $date = $mysqli->real_escape_string($date);
         list($loc_id, $loc_name) = explode('|', $_POST['location']);
	    $hours=$_POST['hours'];
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
    	}else{
    		echo false;
    	}