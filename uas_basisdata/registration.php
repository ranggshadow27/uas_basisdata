<?php

include ('koneksi.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Registration</title>
</head>
<body>
<br/>
	<br/>
	<center><h2>SIGN UP</h2></center>	
	<br/>
	<div class="login">
	<a class="back" href="index.php">Kembali</a>
	<br/>
	<br/>
		<form action="regist.php" method="post">
			<div>
				<label>Username:</label>
				<input type="text" name="user" id="user" placeholder="Masukkan username"/>
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" placeholder="Masukkan password"/>
			</div>			
			<div>
				<input type="submit" name="submit" value="Sign Up" id="tombol">
			</div>
		</form>
	</div>
</body>
</html>