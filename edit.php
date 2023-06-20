<?php
$koneksi=mysqli_connect("localhost","root","","kuliah_web");
//dapatkan dulu data yang akan di edit
$data=mysqli_query($koneksi, 
	"SELECT * FROM footballer WHERE id_footballer='$_GET[id]' ");
$d=mysqli_fetch_assoc($data);
//var_dump($d); die();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Belajar CRUD</title>
</head>
<body>

<h1><a href="index.php">Belajar CRUD</a> : Edit</h1>
<form method="post" action="">
	<input type="hidden" name="id" value="<?=$d['id_footballer'];?>" />
	<label for="nama">Nama</label><br/>
	<input type="text" name="nama" id="nama" value="<?=$d['nama'];?>"/><br/>
	<label for="negara">Negara</label><br/>
	<input type="text" name="negara" id="negara" value="<?=$d['negara'];?>"/><br/>
	<label for="klub">Klub</label><br/>
	<input type="text" name="klub" id="klub" value="<?=$d['klub'];?>"/><br/>
	<label for="usia">Usia</label><br/>
	<input type="text" name="usia" id="usia" value="<?=$d['usia'];?>"/><br/>
	<input type="submit" name="submit" value="edit data" style="display:block; margin-top:5px;"/>
</form>
<?php
if(isset($_POST['submit'])){ //jika tombol submit di klik
	//ambil data dari form input
	$id=$_POST['id'];
	$nama=mysqli_real_escape_string($koneksi, $_POST['nama']); //mengabaikan tanda petik
	$negara=htmlspecialchars($_POST['negara']); //mengabaikan tag html;
	$klub=$_POST['klub'];
	$usia=$_POST['usia'];
	$query=mysqli_query($koneksi, "UPDATE footballer SET 
	nama='$nama', negara='$negara', klub='$klub', usia='$usia'
	WHERE id_footballer='$id' ");
	$sukses=mysqli_affected_rows($koneksi);
	if($sukses > 0){
		echo "<script>alert('Data Berhasil di UBAH');
			window.location.href='index.php';
		</script>";
	}else{
		echo "<script>alert('Data GAGAL di UBAH');
			window.location.href='index.php';
		</script>"; 
	}
}
?>
</body>
</html>