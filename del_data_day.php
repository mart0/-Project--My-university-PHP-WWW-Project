<?php
    include_once('database_config.php');
    if(!empty($_POST)){
    	$date = $_POST['date'];
	    $date = $mysqli->real_escape_string($date);

	    list($loc_id, $loc_name) = explode('|', $_POST['location']);
        $query="SELECT  `id_location`, `day_date`
                FROM weather_day_data 
                WHERE day_date='$date'
                AND id_location='$loc_id'";
        $res = $mysqli->query($query)or die($mysqli->error);
                             
          if(($row = mysqli_fetch_row($res)) == null){
            echo false;
            //exit();
          }else{
        
    	    $result = $mysqli->query("DELETE FROM `weather_day_data` 
    	    						  WHERE `day_date`='$date'  
    	    					      AND `id_location`='$loc_id'") or die($mysqli->error);
        	echo true;
        }
    	}else{
    		echo false;
    	}