<?php
	require_once('../model/sql.php');
	if(isset($_POST['submit']))
	{
	$fname = $_POST['fname'];
	$sname = $_POST['sname'];
	$email = $_POST['email'];
	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];
	
	$query = "INSERT INTO myway (First_Name,Second_Name,Email,Password) VALUES ('$fname','$sname','$email','$password1')";
	$data = mysql_query($query);
	
	header('Location: ../view/Login.php');
	}
?>