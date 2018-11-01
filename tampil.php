

<center> 
<h1>---DASHBOARD---</h1>
<table border="12" cellspacing="2" cellpadding="16">

<form action="dashboardna.php" method="POST">
	<tr>
		<td colspan="10" align="right">Nip : <input type="text" name="search"> 
			<input type="submit" name="kirim" value="Cari">
			<a style="padding-left: 320px" href="newdatana.php">Tambah data</a> 
			<a href="profilena.php">Lihat Profil</a>
		</td>
	</tr>

</form>


	<tr>
		<th>Tanggal Datang</th>
		<th>Sasaran</th>
		<th>Penerima</th>
		<th>Isi Paket</th>
		<th>Tanggal Ambil</th>
		<th colspan="2">Action</th>
	</tr>

	<?php 
		@$search = $_POST['search'];
		include ('koneksi.php');
		$sql1 = "SELECT * FROM datadiri WHERE nim LIKE '%$search%'";
		$result = mysqli_query($conn, $sql1);
			
		if (mysqli_num_rows($result)>0) {
			while ($row = mysqli_fetch_assoc($result)) {
			?>
			<tr>
				<td><?php echo $row['tgl_datang']?></td>
				<td><?php echo $row['sasaran']?></td>
				<td><?php echo $row['penerima']?></td>
				<td><?php echo $row['isipaket']?></td>
				<td><?php echo $row['tgl_ambil']?></td>
				<td><a href="delete.php?nim=<?php echo $row['nim']; ?>"> Hapus</a> </td>
				<td> <a href="edit.php?nim=<?php echo $row['nim']; ?>"> Edit</a></td>
			</tr>
			<?php
			}
		} else{
			echo "0 results";
		}
 	?>
 </table>

</center>