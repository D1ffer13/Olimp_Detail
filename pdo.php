<?php
$host = 'localhost'; // Или 'localhost'
$dbname = 'detailing_center'; // Проверь имя базы данных
$username = 'root'; // Проверь логин (по умолчанию 'root')
$password = ''; // В XAMPP пароль часто пустой

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Ошибка подключения к БД: " . $e->getMessage());
}
