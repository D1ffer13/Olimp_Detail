<?php
session_start();
session_destroy(); // Удаляем все данные сессии
header("Location: index.php"); // Перенаправляем на главную страницу
exit();
?>
