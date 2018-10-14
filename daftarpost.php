<?php 
include 'koneksi.php';
session_start();
$nim = $_SESSION['nim'];
$query = mysqli_query($conn,"SELECT * FROM `datastory` WHERE nim='$nim'");

 ?>
<form method="post">
 <table align="left" border="1">
 	<tr align="left">
 		<td>Story</td>
 		<td>Gambar</td>
 		<td>Edit/Hapus</td>
 	</tr>

 	
 		<?php 
 			while ($arr = mysqli_fetch_array($query)) {
 				$code = $arr['code_file'];
 				echo "<tr>";
 				echo "<td>".$arr['story']."</td>";
 				echo "<td><img src='gambar/".$arr['file_gambar']."' height='140'></td>";
 				echo "<td><button><a href=editprofil.php?kode=".$code." style='text-decoration: none'>Edit</a></button>/<button><a href=delete.php?kode=".$code." style='text-decoration: none'>Dalete</a></button></td>";
 				echo "<tr>";
 			}
 				 			
 		 ?>

 		 <tr>
 		 	<td colspan="3" align="left"><button><a href="menuawal.php" style="text-decoration: none">KEMBALI</a></button></td>
 		 </tr>
 	
 </table>
 </form>

