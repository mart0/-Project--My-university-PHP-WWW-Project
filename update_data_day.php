<?php
    include_once('database_config.php');
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
        $query="UPDATE `weather_day_data` 
                SET `id_location`='$loc_id',
                    `day_date`='$date', 
                    `day_temp`='$temperature',
                    `day_humidity`='$humidity',
                    `image_id`='$image_id'
                WHERE id_location='$loc_id'
                AND day_date = '$date'";
/*

                UPDATE `weather_day_data` 
                SET `id`=[value-1],
                `id_location`=[value-2],
                `day_date`=[value-3],
                `day_temp`=[value-4],
                `day_humidity`=[value-5],
                `image_id`=[value-6] 
                WHERE 1


                $query="UPDATE `weather_data` 
                SET `weather_date`='$date',
                `weather_temp`='$temperature',
                `weather_humidity`='$humidity',
                `weather_hour`='$hours',
                `location_id_location`='$loc_id',
                `image_hour_id`='$image_hour_id'
                WHERE location_id_location='$loc_id'
                AND weather_hour = '$hours'";*/

        $res = $mysqli->query($query) or die($mysqli->error);
            if (($res) != null){                       
             echo false;
            }else {
                $result = $mysqli->query("DELETE FROM `weather_day_data` 
                                    WHERE `id_location`='$loc_id'
                                    AND `day_date`='$date'") 
                                    or die($mysqli->error);
            echo true;
            }
        }else{
            echo false;
        }