<?php
session_start();
require_once "database_config.php";
if(!empty($_POST)){
    
    $location = $_POST['location'];
    $location = $mysqli->real_escape_string($location);
    if($location!=""){
        $query="SELECT id_location, location_name
                  FROM location";
        $res = $mysqli->query($query);
        while (($row = mysqli_fetch_row($res)) != null){                       
          if($row[1]==$location){
            echo false;
            exit(0);
          }
        } 
        $result = $mysqli->query("INSERT INTO `location` (`location_name`) VALUES ('$location')") 
        or die($mysqli->error);
        echo true;
  } else{
      echo false;
    } 
}
