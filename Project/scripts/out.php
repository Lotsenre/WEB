<?php
session_save_path("C:\OSPanel\session");
session_start();
unset($_SESSION['logged']);
session_destroy();
header("location: ./../index.php");
?>