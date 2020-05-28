<?php
		$servername="localhost";
		$username="root";
		$pass="password";
		$dbname="DB_SERVERSIDE";
		$conn=mysqli_connect($servername,$username,$pass,$dbname);
		if(!$conn)
		{
			echo "Connection Failed".mysqli_error($conn);;
		}
		else
		{
			echo "";
		}
?>
