<?php 
include ("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<center>
	<h1>----Data Paket----</h1>
	<form method="POST">
		<table>
			<tr>
				<td>Tanggal Datang</td>
				<td>:</td>
				<td><input type="date" name="tgl_datang"></td>
			</tr>
			<tr>
				<td>Sasaran</td>
				<td>:</td>
				<td><input type="text" name="sasaran"></td>
			</tr>
			<tr>
				<td>Penerima</td>
				<td>:</td>
				<td><input type="text" name="penerima"></td>
			</tr>
			<tr>
				<td>Isi Paket</td>
				<td>:</td>
				<td>
					<input type="text" name="isipaket"><br>
				</td>
			</tr>
			<tr>
				<td>Tanggal Ambil</td>
				<td>:</td>
				<td><input type="date" name="tgl_ambil"></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" value="kirim"></td>
			</tr>

		</table>
	</form>
</body>
</center>
</html>
<?php 
	
	if (isset($_POST['tgl_datang'])) {
	    $tgl_datang    = $_POST['tgl_datang'];
	    $sasaran       = $_POST['sasaran'];
	    $penerima	   = $_POST['penerima'];
	    $isipaket  	   = $_POST['isipaket'];
	    $tgl_ambil	   = $_POST['tgl_ambil'];
	    $sql = "INSERT INTO paket (tgl_datang, sasaran,penerima, isipaket, tgl_ambil) 
	            VALUES ('$tgl_datang', '$sasaran','$penerima', '$isipaket', '$tgl_ambil')"; 
	    if (mysqli_query($conn, $sql)) {
	        header("location: koneksi.php");
	    }else {
	        echo "Error: " . $sql . "<br?" . mysqli_error($conn);
	    }
	    mysqli_close($conn);
	}
?>