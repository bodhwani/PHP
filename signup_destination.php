<?php
//open connection to mysql server
$host = 'mysql.hostinger.in';
$username = 'u956470694_vinit';
$password = 'resonances';
$dbname = 'u956470694_restr';
$dbc = mysqli_connect($host , $username , $password , $dbname);
//anytime we call this variable, it gonna connect us to our database.

if(mysqli_connect_errno())
{
	die('Not connected : '. mysqli_connect_error());
}
?>
<html>
<head>
	<title>Signing up</title>
</head>
<body>
	<img src='http://www.names.org/name-poster/Tucora-teefd0de349232b93554224cc848aa977894042145aaa1d62ec17b5abb247960bk-lq.png'/>
	<?php
		if(isset($_POST['submit']))
		{
			$username = $_POST['username'];
			$email = $_POST['email'];
			$pass = $_POST['pass'];
			$pass2 = $_POST['pass2'];
			if(empty($username)||empty($email)||empty($pass)||empty($pass2))
			{
				echo "Oops! Can't leave any fiels blank";
			}
			elseif($pass!=$pass2)
			{	
				echo "Password did not match. Please type it again !!";
			}
			else
			{
				$sql = "INSERT INTO myuser(username , email , pass)".
					   "VALUES('$username' , '$email' , 'pass') ";
				$res = mysqli_query($dbc , $sql);
				if(!$res)
				{
					die('Query Failed : ' .mysqli_error($dbc));
				}
				else
				{
					echo "Data inserted successfully"; 
				}
			}
		}
	?>
</body>
</html>
