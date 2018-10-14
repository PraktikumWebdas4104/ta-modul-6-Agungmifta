<?php 
	include 'koneksi.php';
	session_start();
	$nim = $_SESSION['nim'];
	$query = mysqli_query($conn,"SELECT * FROM `data` WHERE nim='$nim'");
	$act = mysqli_fetch_array($query);

 ?>

 <table align="left" border="1">
 	<tr>
 		<td align="left" colspan="5"><h2>HALAMAN UTAMA</h2></td>
 	</tr>
 	<tr>
 		<td>Nim</td>
 		<td colspan="4" align="right"><?php echo $act['nim']; ?></td>
 	</tr>

 	<tr>
 		<td>Nama</td>
 		<td colspan="4" align="right"><?php echo $act['nama']; ?></td>
 	</tr>

 	<tr>
 		<td>Kelas</td>
 		<td colspan="4" align="right"><?php echo $act['kelas']; ?></td>
 	</tr>

 	<tr>
 		<td>Jenis Kelamin</td>
 		<td colspan="4" align="right"><?php echo $act['jeniskelamin']; ?></td>
 	</tr>

 	<tr>
 		<td>Hobby</td>
 		<td colspan="4" align="right"><?php echo $act['Hobi']; ?></td>
 	</tr>

 	<tr>
 		<td>Fakultas</td>
 		<td colspan="4" align="right"><?php echo $act['Fakultas']; ?></td>
 	</tr>

 	<tr>
 		<td>Alamat</td>
 		<td colspan="4" align="right"><?php echo $act['Alamat']; ?></td>
 	</tr>
 	
 	<tr>
 		<td><button><a href="post.php" style="text-decoration: none">Post</a></button></td>
 		<td><button><a href="daftarpost.php" style="text-decoration: none">Daftar Post</a></button></td>
 		<td><button><a href="edit.php" style="text-decoration: none">Edit</a></button></td>
 	</tr>
 	</table>
 