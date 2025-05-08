<?php
$host = 'localhost';
$db   = 'detailing_center';
$user = 'root'; // Убедись, что тут правильный логин
$pass = ''; // Убедись, что пароль правильный (по умолчанию в XAMPP пустой)
$charset = 'utf8mb4';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    die("Ошибка подключения: " . $e->getMessage());
}
?>
