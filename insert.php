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
$sql = "INSERT INTO student_info ".
	   "(id , name , dob , gender , email) ".
	   "VALUES(4,'Ritik' , '2000/01/23' , 'Male' , 'ritik@gmail.com')";

$res = mysqli_query($dbc , $sql);
	if(!$res)
	{
		die('no more proceedition :D :D : '.mysqli_error($dbc));
	}
	else
	{
		echo "Data inserted successfully";
	}


?>



