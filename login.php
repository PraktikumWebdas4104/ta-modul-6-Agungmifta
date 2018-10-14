<form method="post">
	<table align="left">
		<tr>
			<td align="left" colspan="2">HALAMAN LOGIN</td>
		</tr>

		<tr>
			<td>Nim:</td>
			<td><input type="text" name="nim"></td>
		</tr>

		<tr>
			<td>Nama:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		
		<tr >
			<td><input type="submit" name="kirim" value="Login"></td>
			<td><button><a href="registrasi.php" style="text-decoration: none">Registrasi</a></button></td>
		</tr>
	</table>
	
	
</form>

<?php 
include 'koneksi.php';
if (isset($_POST['kirim'])) {
	session_start();
	if (str_word_count($_POST['nama'])<=35) {
			$nama = $_POST['nama'];
		}else{echo "Nama Terlalu Banyak <br>";}
		if (!is_numeric($_POST['nim'])&&str_word_count($_POST['nim']>10)) {
			echo "NIM Harus Angka & Maximal 10 Digit <br>";
		}else{$nim = $_POST['nim'];}
		$_SESSION['nama'] = $nama;
		$_SESSION['nim'] = $nim;
		if (isset($nama)&&isset($nim)) {
			$que = mysqli_query($conn,"SELECT * FROM `data` WHERE nim='$nim'");
			$arr = mysqli_fetch_array($que);
			if ($nama ==$arr['nama']&&$nim ==$arr['nim']) {
				header("Location:menuawal.php");
			}else{echo "NIM/NAMA TIDAK ADA";}
		}
}
 ?>