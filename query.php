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

<html>
<body>
	<?php
	$sql = "SELECT id ,name ,";
	$sql.="datediff(now() , dob)/365 AS age, ";
	$sql.="gender , email ";
	$sql.="FROM student_info" ;
	$res = mysqli_query($dbc , $sql);
	if(!$res)
	{
		die('no more proceedition :D :D : '.mysqli_error($dbc));
	}
	while($row = mysqli_fetch_assoc($res))
	{
		foreach ($row as $key => $value)
	    {
			if($key == 'age')
			{
				$value = round($value , 0);
			}	
			echo  ucfirst($key)." : {$value}<br/>";
		}
		echo "<br/>";
	}
?>
</body>
</html>









