<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<br/>
	<br/>
	<center><h2>LOGIN PAGE</h2></center>	
	<br/>
    <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "<center><p>Maaf username atau password anda salah!</p></center>";
		}else if($_GET['pesan'] == "logout"){
			echo "<center><p>Silahkan login kembali!</p></center>";
		}else if($_GET['pesan'] == "belum_login"){
			echo "<center><p>Mohon untuk login terlebih dahulu!</p></center>";
		}else if($_GET['pesan'] == "registrasi_sukses"){
			echo "<center><p>Akun berhasil terdaftar! Silahkan login</p></center>";
		}
	}
	?>
	<div class="login">
	<br/>
		<form action="session.php" method="post">
			<div class="area">
				<label>Username:</label>
				<input type="text" name="username" id="username" placeholder="Masukkan username"/>
			</div>
			<div class="area">
				<label>Password:</label>
				<input type="password" name="password" id="password" placeholder="Masukkan password"/>
			</div>			
			<div>
				<input type="submit" value="Sign In" id="tombol">
			</div>
			<span class="text">Dont have an account? </span> <a class="link" href="registration.php">Sign Up</a>
		</form>
	</div>
</body>
</html>