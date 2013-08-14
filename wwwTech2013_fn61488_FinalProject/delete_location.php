<?php 
require_once "database_config.php";
if(!empty($_POST)){
    list($loc_id, $loc_name) = explode('|', $_POST['location']);
   
        $result = $mysqli->query("DELETE FROM `location` WHERE `id_location` = $loc_id ;") 
        or die($mysqli->error);
        echo 'Location deleted';
  
}
