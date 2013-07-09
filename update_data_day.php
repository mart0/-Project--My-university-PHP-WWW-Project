<?php
    include_once('database_config.php');
    if(!empty($_POST)){
        $date = $_POST['date'];
        $date = $mysqli->real_escape_string($date);
        
        $temperature = $_POST['temperature'];
        $temperature = $mysqli->real_escape_string($temperature);

        $humidity=$_POST['humidity'];
        $humidity = $mysqli->real_escape_string($humidity);

        $image_id=$_POST['images'];
        list($loc_id, $loc_name) = explode('|', $_POST['location']);
    
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
        }else{
            echo false;
        }