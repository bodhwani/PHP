<?php

$host = 'localhost';
$username = 'u102592233_user';
$password = 'password';
$db_name = 'u102592233_game';

// u102592233_game  AND  u102592233_user 
//connect to the databse
mysql_connect('$host' , "$username" , 'password') or die('cannot connect ');
mysql_select_db('$db_name') or die('cannot select the database'); 

?>