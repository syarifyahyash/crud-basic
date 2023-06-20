<?php 
session_start();
if(empty($_SESSION['session_username'])){
  header("location:login.php");
  die();
}

//koneksi ke database
//$koneksi=mysqli_connect("localhost","root","","kuliah_web");
include "koneksi.php";
// if($koneksi){
// 	echo "KONEKSI KE DATABASE BERHASIL";
// }else{
// 	echo "KONEKSI KE DATABASE GAGAL";
// }

//mysqli_query adalah built in function php 
//untuk menuliskan perintah SQL
//$query=mysqli_query($koneksi, "SELECT * FROM footballer ORDER BY nama asc");
// var_dump($query); 
// die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Belajar CRUD</title>
	<style>
		table{
			border-collapse:collapse;
		}
	</style>
</head>
<body>

<h1>JUDUL : Belajar CRUD</h1>
<h2>Kamu Login dengan Akun <?=$_SESSION['session_username'];?></h2>
<div>
	<a href="logout.php">Logout</a>
</div>

<button style="display:block; margin-bottom:5px;">
	<a href="tambah.php">+ Data</a>
</button>

<table border="1" cellpadding="5px">
	<thead>
		<tr>
			<th>No</th>
			<th>ID</th>
			<th>Nama</th>
			<th>Negara</th>
			<th>Klub</th>
			<th>Usia</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
	<?php 
	$no=1;
	$query=mysqli_query($koneksi, "SELECT * FROM footballer ORDER BY id_footballer desc");
	while($d=mysqli_fetch_assoc($query)){ 
	//ini menghasilkan array associative
	?>
		<tr>
			<td><?= $no++ ?></td>
			<td><?= $d['id_footballer']; ?></td>
			<td><?= $d['nama']; ?></td>
			<td><?= strtolower($d['negara']); ?></td>
			<td><?= $d['klub']; ?></td>
			<td><?= $d['usia']; ?></td>
			<td><a href="edit.php?id=<?= $d['id_footballer'];?>">Edit</a></td>
			<td>
				<a href="delete.php?id=<?= $d['id_footballer'];?>" 
				onClick="return confirm('Yakin mau di hapus?');">Delete</a>
			</td>
		</tr>
	<?php 
	$no++;
	} 
	?>
	</tbody>
</table>


</body>
</html>