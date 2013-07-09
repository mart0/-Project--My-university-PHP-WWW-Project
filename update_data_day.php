<?php
    include_once('database_config.php');
    session_start();
    $userID=$_SESSION['user_id'];
    if(!empty($_POST)){
        $date = $_POST['date'];
        $date = $mysqli->real_escape_string($date);
        
        $temperature = $_POST['temperature'];
        $temperature = $mysqli->real_escape_string($temperature);

        $humidity=$_POST['humidity'];
        $humidity = $mysqli->real_escape_string($humidity);


        $hours=$_POST['hours'];
        $hours = $mysqli->real_escape_string($hours);

        list($loc_id, $loc_name) = explode('|', $_POST['location']);
 
        $image_id=$_POST['images'];
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
                $query="SELECT  *
                        FROM weather_day_data 
                        WHERE  day_date='$date'
                        AND id_location='$loc_id '";
               
                $res = $mysqli->query($query) or die($mysqli->error);
                if (($row = mysqli_fetch_row($res)) == null){                       
                     echo false;
                }else {
               
                        $query="UPDATE `weather_day_data` 
                                SET `day_temp`='$temperature',
                                    `day_humidity`='$humidity',
                                    `image_id`='$image_id'
                                WHERE id_location='$loc_id'
                                AND day_date = '$date'";

                    $result = $mysqli->query($query) or die($mysqli->error);

                    if($result!=null){
                            echo true;
                    }else{
                        echo false;
                    }

                }
            }
        }

        }else{
            echo false;
        }

