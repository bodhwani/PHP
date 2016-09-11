<?php

$conn = mysql_connect('localhost' , 'TBT' , 'password');
if(!$conn)
{
	die('Not connected :' .mysql_error());
}


$sql0 = "SELECT * FROM 	game";
$res0 = mysql_query($sql0);
if(!$res0)
{
	die('Cant connect to query :' .mysql_error());
}

?>