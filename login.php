<?php 
session_start();
if(!empty($_SESSION['session_username'])){
  header("location:index.php");
  die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>form login</title>
</head>
<body>
  <form method="post" action="">
    username:<br/>
    <input type="text" name="username"/><br/>
    password:<br/>
    <input type="password" name="password"/><br/>
    <input type="submit" name="login" value="MASUK"/>
  </form>  
  <?php
  if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    include "koneksi.php";
    $query=mysqli_query($koneksi, "SELECT * FROM footballer WHERE nama='$user' and usia='$pass' ");
    $ada = mysqli_num_rows($query);
    if($ada > 0){
      $_SESSION['session_username'] = $user;
      header("location: index.php");
    }else{
      echo "login gagal";
    }
  }
  ?>
</body>
</html>
