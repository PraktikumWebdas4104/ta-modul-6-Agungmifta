<form method="post">
	<table align="left">
		<tr>
		<td>Nim:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
		<td>Nama:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
		<td>Kelas:</td>
			<td>
			<input type="radio" name="rad" value="D3MI-41-01">D3MI-41-01
			<input type="radio" name="rad" value="D3MI-41-02">D3MI-41-02
			<input type="radio" name="rad" value="D3MI-41-03">D3MI-41-03
			<input type="radio" name="rad" value="D3MI-41-04">D3MI-41-04
			</td>
		</tr>
		<tr>
			<td>Jeniskelamin:</td>
			<td><input type="radio" name="jk" value="laki-laki">Laki-laki
				<input type="radio" name="jk" value="Perempuan">Perempuan 
				<input type="radio" name="jk" value="Dll">Dll </td>
		</tr>
		<tr>
			<td>Hobi:</td>
			<td>
				<input type="checkbox" name="hb[]" value="Bola">Bola
				<input type="checkbox" name="hb[]" value="Volly">Volly
				<input type="checkbox" name="hb[]" value="Gulat">Gulat
				<input type="checkbox" name="hb[]" value="Batminton">Batminton
				<input type="checkbox" name="hb[]" value="Balapan">Balapan 
			</td>
		</tr>
		<tr>
			<td>Faklutas:</td>
			<td>
				<select name="ck1">
				<option>Pilih</option>
				<option value="FakultasIlmuTerapan">FakultasIlmuTerapan</option>
				<option value="FakultasKomunikasi&Bisnis">FakultasKomunikasi&Bisnis</option>
				<option value="FakultasIndustriKreatif">FakultasIndustriKreatif</option>
				<option value="FakultasTeknikElektro">FakultasTeknikElektro</option>
				<option value="FakultasEkonomi&Bisnis">FakultasEkonomi&Bisnis</option>
				</select>
			</td>
		</tr>

		<tr>
			<td>Alamat:</td>
			<td><textarea name="alamat"></textarea></td>
		</tr>
		<tr>
			<td><input type="submit" name="send" value="submit"></td>
			<td align="right"><button><a href="login.php" style="text-decoration: none">Masuk</a></button></td>
		</tr>
	</table>	
</form>

<?php 
	include 'koneksi.php';
	if (isset($_POST['send'])) {
		if (str_word_count($_POST['nama'])<=35) {
			$nama = $_POST['nama'];
		}else{echo "Nama Terlalu Banyak <br>";}
		if (!is_numeric($_POST['nim'])&&str_word_count($_POST['nim']>10)) {
			echo "NIM Harus Angka & Maximal 10 Digit <br>";
		}else{$nim = $_POST['nim'];}

		$kelas = $_POST['rad'];
		$jenisk = $_POST['jk'];
		$jelas = $_POST['hb'];
		$hobi = implode(",",$jelas);
		$fakultas = $_POST['ck1'];
		$Alamat = $_POST['alamat'];
		if (isset($nama)&&isset($nim)&&isset($kelas)&&isset($jenisk)&&isset($hobi)&&isset($fakultas)&&isset($Alamat)) {
		$query = mysqli_query($conn,"INSERT INTO data(nim, nama, kelas, jeniskelamin, Hobi, Fakultas, Alamat) VALUES ('$nim','$nama','$kelas','$jenisk','$hobi','$fakultas','$Alamat')");
		if (isset($query)) {
			header("Location:login.php");
		}
		}else{echo "Data Harus Diisi Semua";}
		
	}
 ?>