<?php
include 'db.php';

$email = "admin@example.com";
$password = "admin123"; // Новый пароль админа
$hashed_password = password_hash($password, PASSWORD_DEFAULT); // Хешируем пароль
$role = "admin"; // Роль админа

$stmt = $pdo->prepare("INSERT INTO users (email, password, role) VALUES (?, ?, ?)");
$stmt->execute([$email, $hashed_password, $role]);

echo "✅ Админ успешно создан! Email: $email, Пароль: $password";
?>
