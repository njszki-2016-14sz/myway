<?php
	require_once('../model/sql.php');
	if(isset($_POST['email']) and isset($_POST['password']))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$query = "SELECT * FROM myway WHERE Email='$email' and Password='$password'";
		
		$result=mysql_query($query);
		$count = mysql_num_rows($result);
		if($count==1)
		{
			header('Location: ../view/Home.php');
		}

	}

?>