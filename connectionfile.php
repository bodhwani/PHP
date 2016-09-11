<?php
//open connection to mysql server
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'student';
$dbc = mysqli_connect($host , $username , $password , $dbname);
//anytime we call this variable, it gonna connect us to our database.

if(mysqli_connect_errno())
{
	die('Not connected : '. mysqli_connect_error());
}
?>




