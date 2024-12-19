<?php 
session_save_path("C:\OSPanel\session");
session_start();
$login=$_POST['login']; 
$pass=$_POST['pass']; 
$name=$_POST['name']; 
$adress='Не указан';
 
if(mb_strlen($login) < 5 || mb_strlen($login) > 20) { 
  echo "<script>alert('Недопустимая длина логина!');
  window.location.href = './../reg/reg.html';</script>";
exit(); 
} 
else if(mb_strlen($pass) < 6 || mb_strlen($pass) > 30) { 
  echo "<script>alert('Недопустимая длина пароля!');
  window.location.href = './../reg/reg.html';</script>";
exit(); 
} 
 
$mysql=mysqli_connect('localhost', 'root', '', 'Raimov'); 
if ($mysql==False) { 
  echo "<script>alert('Нет допступа к серверу!');
  window.location.href = './../reg/reg.html';</script>";
exit(); 
} 
 
$mysql->query("INSERT INTO `registration` (`login`, `name`, `pass`,`adress`) 
  VALUES ('$login', '$name', '$pass','$adress')"); 
$mysql->close(); 
echo "<script>alert('Успешная регистрация!');
window.location.href = './../reg/authriz.html';</script>";
?>