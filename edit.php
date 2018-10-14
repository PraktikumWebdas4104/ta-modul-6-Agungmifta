<?php 
include 'koneksi.php';
	session_start();
	$nim = $_SESSION['nim'];
	$query = mysqli_query($conn,"SELECT * FROM `datadiri` WHERE nim='$nim'");
	$act = mysqli_fetch_array($query);
	$array = explode(",", $act['Hobi']);
	
 ?>

 <form method="post">
	<table align="center">
		<tr>
			<td>Nama:</td>
			<td><?php echo "<input type='text' name='nama' value='".$act['nama']."''>"; ?></td>	
		</tr>
		
		<tr>
			<td>Kelas:</td>
			<td>
		<input type="radio" name="rad" value="D3MI-41-01" <?php echo ($act['kelas']=='D3MI-41-01')?'checked':'' ?>>D3MI-41-01
		<input type="radio" name="rad" value="D3MI-41-02" <?php echo ($act['kelas']=='D3MI-41-02')?'checked':'' ?>>D3MI-41-02
		<input type="radio" name="rad" value="D3MI-41-03" <?php echo ($act['kelas']=='D3MI-41-03')?'checked':'' ?>>D3MI-41-03
		<input type="radio" name="rad" value="D3MI-41-04" <?php echo ($act['kelas']=='D3MI-41-04')?'checked':'' ?>>D3MI-41-04</td>
		</tr>

		<tr>
			<td>Jeniskelamin:</td>
			<td>
		<input type="radio" name="jk" value="laki-laki" <?php echo ($act['jeniskelamin']=='laki-laki')?'checked':'' ?>>Laki-laki
		<input type="radio" name="jk" value="Perempuan" <?php echo ($act['jeniskelamin']=='Perempuan')?'checked':'' ?>>Perempuan
		<input type="radio" name="jk" value="Dll" 		<?php echo ($act['jeniskelamin']=='Dll')?'checked':'' ?>>Dll</td>
		</tr>

		<tr>
			<td>Hobi:</td>
			<td>
				<input type="checkbox" name="hb[]" value="Bola" <?php if(in_array('Bola', $array)){echo "checked=checked";}?>>Bola
				<input type="checkbox" name="hb[]" value="Volly" <?php if(in_array('Volly', $array)){echo "checked=checked";}?>>Volly
				<input type="checkbox" name="hb[]" value="Gulat"<?php if(in_array('Gulat', $array)){echo "checked=checked";}?>>Gulat
				<input type="checkbox" name="hb[]" value="Batminton"<?php if(in_array('Batminton', $array)){echo "checked=checked";}?>>Badminton 	
				<input type="checkbox" name="hb[]" value="Balapan"<?php if(in_array('Balapan', $array)){echo "checked=checked";}?>>Balapan 	 	
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
			<td><?php echo "<textarea name='alamat'".">".$act['Alamat']."</textarea>"; ?> </td>
		</tr>

		<tr>
			<td><input type="submit" name="send" value="submit"></td>
			<td><button><a href="menuawal.php" style="text-decoration: none">kembali</a></button></td>
		</tr>
	</table>
	<br>
		 <br>
	 <br>
	<br>
	 	<br>
	<br>
	
	
</form>

<?php 
if (isset($_POST['send'])) {
		if (str_word_count($_POST['nama'])<=35) {
			$nama = $_POST['nama'];
		}else{echo "Nama terlalu panjang <br>";}
		$kelas = $_POST['rad'];
		$jenisk = $_POST['jk'];
		$jelas = $_POST['hb'];
		$hobi = implode(",",$jelas);
		$fakultas = $_POST['ck1'];
		$Alamat = $_POST['alamat'];
		$upd = mysqli_query($conn,"UPDATE data SET nama='$nama',kelas='$kelas',jeniskelamin='$jenisk',Hobi='$hobi',Fakultas='$fakultas',Alamat='$Alamat' WHERE nim='$nim'");
		if (isset($upd)) {
			echo "berhasil";
			header("Location:edit.php");
		}
		}

 ?>