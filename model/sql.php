<?php
	//Connect Database
	$db=mysql_connect('localhost','root','');
	//$db = new PDO('mysql:host=localhost;dbname=myway', 'root', '');
	if(!$db)
	{
		die('Connection error: '.mysql_error());
	}
	
	
	//Select Database
	$table = mysql_select_db('myway',$db);
	if(!$table)
	{
		die('Table selection error: '.mysql_error());
	}
?>