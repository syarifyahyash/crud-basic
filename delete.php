<?php
//koneksi ke database
$koneksi=mysqli_connect("localhost","root","","kuliah_web");

$query=mysqli_query($koneksi, 
	"DELETE FROM footballer WHERE id_footballer='$_GET[id]' ");
	
$hapus=mysqli_affected_rows($koneksi); //outputnya 1 jika berhasil, -1 jika gagal
//var_dump($hapus); die();
if($hapus > 0){
	echo "<strong>Data berhasil di hapus</strong><br/>";
	echo "<a href='index.php'>Kembali</a>";
	/*echo "
	<script>
	alert('Data Berhasil di Hapus');
	window.location.href('index.php');
	</script>";*/
}else{
	echo "<strong style='color:red'>Data gagal di hapus</strong><br/>";
	echo "<a href='index.php'>Kembali</a>";
}
?>