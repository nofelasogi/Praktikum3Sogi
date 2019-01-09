<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<style type="">
body{
background-image: url(login.jpg);
background-size: cover;
font-family: 'Open Sans', sans-serif;
margin-left: 440px;
margin-top: 250px;
color: maroon;
font-size: 80px;
}
</style>
<?php
$user = $_POST['username'];
$pass = $_POST['password'];
if ($user == "enoph" && $pass =="051101"){
  echo "Login Berhasil";
}
else{
  echo "Login Gagal";
}
?>
</body>
</html>