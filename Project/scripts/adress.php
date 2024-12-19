<?php
session_save_path("C:\OSPanel\session");
session_start();
if(isset($_SESSION['logged']) == true){
    header("Location: ./../lk/adress.php");
    exit;
}
else{
    header('location: ./../reg/authriz.html');
}
?>