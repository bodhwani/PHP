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


<?php
$sql = "DELETE FROM student_info " .
		" WHERE id=4";
	   

$res = mysqli_query($dbc , $sql);
	if(!$res)
	{
		die('no more proceedition :D :D : '.mysqli_error($dbc));
	}
	else
	{
		//	while($row = mysqli_fetch_assoc($res))

		echo "Data deleted successfully !!";
	}
	


?>



