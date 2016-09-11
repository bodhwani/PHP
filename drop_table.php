<?php
//open connection to mysql server
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'temp';
$dbc = mysqli_connect($host , $username , $password , $dbname);
//anytime we call this variable, it gonna connect us to our database.

if(mysqli_connect_errno())
{
	die('Not connected : '. mysqli_connect_error());
}
?>


<?php
$sql = "DROP TABLE todelete";

$res = mysqli_query($dbc , $sql);
	if(!$res)
	{
		die('no more proceedition :D :D : '.mysqli_error($dbc));
	}
	else
	{
		//	while($row = mysqli_fetch_assoc($res))

		echo "Table Dropped successfully !!";
	}
	


?>



