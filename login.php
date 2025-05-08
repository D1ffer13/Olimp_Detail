<?php
session_start();
include 'db.php'; // Подключаем БД

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim(strtolower($_POST['email']));
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role']; // Добавляем роль пользователя
            $_SESSION['user_email'] = $user['email']; // Сохраняем email
            
            // Проверяем роль
            if ($user['role'] == 'admin') {
                header("Location: admin.php");
            } else {
                header("Location: index.php");
            }
            exit();
        } else {
            echo "<script>alert('❌ Неверный пароль!');</script>";
        }
    } else {
        echo "<script>alert('❌ Пользователь не найден!');</script>";
    }
}
?>
