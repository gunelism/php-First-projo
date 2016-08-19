<?php
session_start();
unset($_SESSION['giris']);
header('Location: index.php');



// session_start();
// 	unset($_SESSION['admin']);
// 	header('Location:index.php');
?>