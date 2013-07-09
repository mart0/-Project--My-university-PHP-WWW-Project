<?php
    include_once('database_config.php');
    session_start();
    $userID=$_SESSION['user_id'];
    if(!empty($_POST)){
    	$date = $_POST['date'];
	    $date = $mysqli->real_escape_string($date);
        list($loc_id, $loc_name) = explode('|', $_POST['location']);
        $flag=false;
        if( $humidity=="" || $temperature=="" || $date==""){
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
            }
        }
    }else{
    	echo false;
    }