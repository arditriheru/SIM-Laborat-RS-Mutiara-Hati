<?php 
include '../config/connect.php';
$id_lab_trn = $_GET['id'];
$hapus=mysqli_query($koneksi,"DELETE FROM lab_trn WHERE id_lab_trn='$id_lab_trn'");
if($hapus){
	echo "<script>alert('Berhasil Dihapus!!!');document.location='laborat-tampil.php'</script>";
}else{
	echo "<script>alert('Gagal Hapus!!!');document.location='laborat-tampil.php'</script>";
}
?>