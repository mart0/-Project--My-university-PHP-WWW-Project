<?php

if(!$_POST['page']) die("0");

$page = (int)$_POST['page'];

if(file_exists('page'.$page.'.html')){
	echo file_get_contents('page'.$page.'.html');
	
}
if(file_exists('page'.$page.'.php')){
	echo file_get_contents('page'.$page.'.php');
	
}
else echo 'There is no such page!';