<?php
$koneksi=mysqli_connect("localhost","root","","kuliah_web");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Belajar CRUD</title>
	<style type="text/css">

  input:required:invalid, input:focus:invalid {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAeVJREFUeNqkU01oE1EQ/mazSTdRmqSxLVSJVKU9RYoHD8WfHr16kh5EFA8eSy6hXrwUPBSKZ6E9V1CU4tGf0DZWDEQrGkhprRDbCvlpavan3ezu+LLSUnADLZnHwHvzmJlvvpkhZkY7IqFNaTuAfPhhP/8Uo87SGSaDsP27hgYM/lUpy6lHdqsAtM+BPfvqKp3ufYKwcgmWCug6oKmrrG3PoaqngWjdd/922hOBs5C/jJA6x7AiUt8VYVUAVQXXShfIqCYRMZO8/N1N+B8H1sOUwivpSUSVCJ2MAjtVwBAIdv+AQkHQqbOgc+fBvorjyQENDcch16/BtkQdAlC4E6jrYHGgGU18Io3gmhzJuwub6/fQJYNi/YBpCifhbDaAPXFvCBVxXbvfbNGFeN8DkjogWAd8DljV3KRutcEAeHMN/HXZ4p9bhncJHCyhNx52R0Kv/XNuQvYBnM+CP7xddXL5KaJw0TMAF8qjnMvegeK/SLHubhpKDKIrJDlvXoMX3y9xcSMZyBQ+tpyk5hzsa2Ns7LGdfWdbL6fZvHn92d7dgROH/730YBLtiZmEdGPkFnhX4kxmjVe2xgPfCtrRd6GHRtEh9zsL8xVe+pwSzj+OtwvletZZ/wLeKD71L+ZeHHWZ/gowABkp7AwwnEjFAAAAAElFTkSuQmCC);
    background-position: right top;
    background-repeat: no-repeat;
    -moz-box-shadow: none;
  }
  input:required:valid {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAepJREFUeNrEk79PFEEUx9/uDDd7v/AAQQnEQokmJCRGwc7/QeM/YGVxsZJQYI/EhCChICYmUJigNBSGzobQaI5SaYRw6imne0d2D/bYmZ3dGd+YQKEHYiyc5GUyb3Y+77vfeWNpreFfhvXfAWAAJtbKi7dff1rWK9vPHx3mThP2Iaipk5EzTg8Qmru38H7izmkFHAF4WH1R52654PR0Oamzj2dKxYt/Bbg1OPZuY3d9aU82VGem/5LtnJscLxWzfzRxaWNqWJP0XUadIbSzu5DuvUJpzq7sfYBKsP1GJeLB+PWpt8cCXm4+2+zLXx4guKiLXWA2Nc5ChOuacMEPv20FkT+dIawyenVi5VcAbcigWzXLeNiDRCdwId0LFm5IUMBIBgrp8wOEsFlfeCGm23/zoBZWn9a4C314A1nCoM1OAVccuGyCkPs/P+pIdVIOkG9pIh6YlyqCrwhRKD3GygK9PUBImIQQxRi4b2O+JcCLg8+e8NZiLVEygwCrWpYF0jQJziYU/ho2TUuCPTn8hHcQNuZy1/94sAMOzQHDeqaij7Cd8Dt8CatGhX3iWxgtFW/m29pnUjR7TSQcRCIAVW1FSr6KAVYdi+5Pj8yunviYHq7f72po3Y9dbi7CxzDO1+duzCXH9cEPAQYAhJELY/AqBtwAAAAASUVORK5CYII=);
    background-position: right top;
    background-repeat: no-repeat;
  }
	<!--
	css input invalid https://www.the-art-of-web.com/html/html5-form-validation/
	javascript validation: https://www.the-art-of-web.com/javascript/validate/
	-->
</style>
</head>
<body>

<h1><a href="index.php">Belajar CRUD</a> : Tambah</h1>
<form method="post" action="">
	<label for="nama">Namax</label><br/>
	<input type="text" name="nama" id="nama" required autocomplete="off" /><br/>
	<label for="negara">Negara</label><br/>
	<input type="text" name="negara" id="negara"/><br/>
	<label for="klub">Klub</label><br/>
	<input type="text" name="klub" id="klub"/><br/>
	<label for="usia">Usia</label><br/>
	<input type="number" name="usia" id="usia" value="1" min="1" max="100" required /><br/>
	<input type="submit" name="klik" value="tambah data" style="display:block; margin-top:5px;"/>
</form>

<?php 
if(isset($_POST['klik'])){ //jika tombol submit di klik
	//ambil data dari form input
	//mengabaikan tanda petik
	$nama=mysqli_real_escape_string($koneksi, $_POST['nama']); 
	$negara=htmlspecialchars($_POST['negara']); //mengabaikan tag html; 
	$klub=htmlspecialchars($_POST['klub']);
	//$klub=$_POST['klub'];
	$usia=$_POST['usia'];
	$query=mysqli_query($koneksi, 
		"INSERT INTO footballer VALUES 
		('','$nama','$negara','$klub','$usia')
		");
	$sukses=mysqli_affected_rows($koneksi);
	if($sukses > 0){
		echo "<script>alert('Data Berhasil di Tambah');
			window.location.href='index.php';
		</script>";
	}else{
		echo "<script>alert('Data GAGAL di Tambah');
			window.location.href='index.php';
		</script>"; 
	}
}
?>

</body>
</html>