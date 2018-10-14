<form method="post" enctype="multipart/form-data">
	<table align="left">
		<tr>
			<td colspan="2" align="center">Post</td>
		</tr>

		<tr>
			<td>Story:</td>
			<td><textarea name="story" rows="20" cols="80"></textarea></td>
		</tr>
		

		<tr>
			<td>Gambar:</td>
			<td><input type="file" name="foto"></td>
		</tr>

		<tr align="left">
			<td colspan="2"><input type="submit" name="simpan" value="submit"><button><a href="menuawal.php" style="text-decoration: none">Kembali</a></button></td>
			
		</tr>
	</table>
</form>

<?php 
include 'koneksi.php';
session_start();
if (isset($_POST['simpan'])) {
	if ($_FILES['foto']['name'] != "") {
		$nim = $_SESSION['nim'];
		$gambar = $_FILES['foto']['name'];
		if (str_word_count($_POST['story'])<=30) {
			$story = $_POST['story'];
		}else{echo "STORY HARUS DI BAWAH 30 KATA";}
		
		if (isset($story)&&isset($gambar)) {
			$acti = mysqli_query($conn,"INSERT INTO datastory(nim, code_file, story, file_gambar) VALUES ('$nim','','$story','$gambar')");
		if (!$acti) {
			die("GAGAL");
		}else{echo "BERHASIL";}	
		}
		
	}
}
 ?>