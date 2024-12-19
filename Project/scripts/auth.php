<?php 
session_save_path("C:\OSPanel\session");
session_start();
$login=$_POST['login']; 
$pass=$_POST['pass']; 

$mysql=mysqli_connect('localhost', 'root', '', 'Raimov'); 
 if ($mysql==False) { 
echo "<script>alert('Нет допступа к серверу!');
window.location.href = './../reg/authriz.html';</script>";
 exit(); 
 } 
$result=$mysql->query("SELECT * FROM `registration` WHERE `login`='$login' and `pass`='$pass'"); 
$_SESSION['logged']=$result->fetch_assoc(); 
$_SESSION['login']=$login;
if (count($_SESSION['logged']) == 0) { 
echo "<script>alert('Пользователь не найден!');
window.location.href = './../reg/authriz.html';</script>";
 exit(); 
} 
 
$mysql->close(); 
 
echo "<script>alert('Успешная авторизация!');
window.location.href = './../lk/lk.php';</script>";
?>