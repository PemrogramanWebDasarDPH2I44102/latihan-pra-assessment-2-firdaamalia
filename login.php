
<center>

 	<h1>---Login---</h1>
<form method="post">
     	
 		Username <input type="text" name="username"> <br><br>
 	
 		Password <input type="password" name="password"> <br><br>
 	
 		<input  type="submit" name="kirim" value="Login">

</form>
</center>
<?php
	if (isset($_POST['kirim'])) {
		session_start();
		include("koneksi.php");
		@$username = $_POST["username"];
		@$password = $_POST["password"];
		$sql = "SELECT * from user where username = '$username' and password = '$password'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) != 0) {
			header("Location: paket.php");
		}else {
			echo "Login Gagal";
		}
	}
?>