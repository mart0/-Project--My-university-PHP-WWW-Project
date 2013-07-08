<?php 
require_once "database_config.php";
if(empty($_POST)){
    echo 'Post is empty ';}
else{   
   list($id, $text) = explode('|', $_POST['location']);
   echo 'list exploded';
   var_dump($_POST);
}