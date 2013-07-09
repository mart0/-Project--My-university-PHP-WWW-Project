<?php
    include_once('database_config.php');
    session_start();
    $userID=$_SESSION['user_id'];
    if(!empty($_POST)){

    	$image_id=$_POST['images'];

    	$date = $_POST['date'];
	    $date = $mysqli->real_escape_string($date);
	    
	    $temperature = $_POST['temperature'];
	    $temperature = $mysqli->real_escape_string($temperature);

	    $humidity=$_POST['humidity'];
	    $humidity = $mysqli->real_escape_string($humidity);
        $flag="fail";

	    list($loc_id, $loc_name) = explode('|', $_POST['location']);

        if( $humidity=="" || $temperature=="" || $date==""){
            echo "fail";
        }else{

            $query="SELECT  start_date, final_date
                        FROM employee_has_location 
                        WHERE employee_id_emp='$userID'
                        AND location_id_location='$loc_id'";
            $res = $mysqli->query($query) or die($mysqli->error);
                                      
            while(($row = mysqli_fetch_row($res)) != null){
                if($row[0]<=$date && $date<=$row[1]){
                            $flag="success";
                }

            }

            if($flag=="success"){
                $query="SELECT *
                        FROM weather_day_data 
                        WHERE id_location='$loc_id'
                        AND day_date='$date'";
                $res = $mysqli->query($query)or die($mysqli->error);;
                if(($row = mysqli_fetch_row($res)) != null){                       
                    echo "fail";
                }else{
        	    
        	    $result = $mysqli->query("INSERT INTO `weather_day_data`(`id_location`, `day_date`, `day_temp`, `day_humidity`, `image_id`) 
                                            VALUES ('$loc_id', '$date', '$temperature', '$humidity','$image_id')") 
            	or die($mysqli->error);
            	
            		echo "success";
                }
            }
    }
    }else{
    		echo "fail";
   }

    