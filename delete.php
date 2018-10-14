<?php 
include 'koneksi.php';
$code = $_GET['kode'];
$que = mysqli_query($conn,"DELETE FROM datastory WHERE code_file='$code'");
if (!$que) {
	die("GAGAL");
}else{
	echo "BERHASIL, Tunggu Sebentar <meta  http-equiv=refresh content=2;url=daftarpost.php>";

}
 ?>
