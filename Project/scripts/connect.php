<?php 
session_save_path("C:\OSPanel\session");
session_start();

$mysql=mysqli_connect('localhost', 'root', '', 'Raimov'); 
 if ($mysql==False) { 
echo "<script>alert('Нет допступа к серверу!');
window.location.href = './../reg/authriz.html';</script>";
 exit(); 
 } 
?>