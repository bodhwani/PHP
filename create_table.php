<?php
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

<html>
<body>
<?php
$sql = "CREATE TABLE sport";
$sql.="(id int primary key auto_increament,";
$sql.="name varchar)";
	$res = mysqli_query($dbc , $sql);

if(!$res)
{
	die('Creating table failed :' .mysqli_error($dbc));
}
else
{
	echo 'Table created successfully';
}
?>
</body>
</html>


