<html>
<head>

<head/>
<body>


<body/>
<html/>
<?php
	require_once  "connect.php";
	$connection = new mysqli($host, $username, $passwd, $dbname); 
	if($connection->connect_errno!=0)
	{
		echo $connection->connect_error;
	}
	else{ 	
		$login = $_POST['login'];
		$pasword = $_POST['password'];

		echo "chill";

		$connecton->close();
	




	}



?>