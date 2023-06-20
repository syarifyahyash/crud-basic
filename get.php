<?php
include "koneksi.php";
//$id=50;
$id=$_GET['idnya'];
$sql=mysqli_query($koneksi,"DELETE FROM footballer WHERE id_footballer='$id' "); 
if($sql){
  echo "hapus berhasil";
}else{
  echo "hapus gagal";
}

?>