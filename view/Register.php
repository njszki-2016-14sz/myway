<html>
	<head>
	<title>MYWAY</title>
	<link rel="stylesheet" href="LogReg.css">
	</head>
	<body>
		<div id="main">
			<form method="post" action="../control/NewUser.php">
				<div id="input">
					First Name: 
				</div>
				<input type="text" id="fname" name="fname"><br>
				<div id="input">
					Second Name: 
				</div>
				<input type="text" id="sname" name="sname"><br>
				<div id="input">
					E-mail: 
				</div>
				<input type="text" id="email" name="email"><br>
				<div id="input">
					Password: 
				</div>
				<input type="password" id="password1" name="password1"><br>
				<div id="input">
					Password again: 
				</div>
				<input type="password" id="password2" name="password2"><br>
				<input type="submit" id="submit" name="submit" value="Register">
			</form>
		</div>
	</body>
</html>