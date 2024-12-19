<?php 
session_save_path("C:\OSPanel\session");
session_start();
$adress=$_POST['adress'];
$login=$_SESSION['login'];

if(mb_strlen($adress) < 5){ 
    echo "<script>alert('Недопустимая длина адреса!');
    window.location.href = './../lk/lk.php';</script>";
  exit(); 
}

$mysql=mysqli_connect('localhost', 'root', '', 'Raimov'); 
if ($mysql==False) { 
  echo "<script>alert('Нет допступа к серверу!');
  window.location.href = './../reg/reg.html';</script>";
exit(); 
} 

$mysql->query("UPDATE `registration` SET `adress`='$adress' WHERE `login`='$login'"); 
$_SESSION['adress']=$adress;
$mysql->close(); 
  echo "<script>alert('Адресс обновлён');
  window.location.href = './../lk/adress.php';</script>";
?>
