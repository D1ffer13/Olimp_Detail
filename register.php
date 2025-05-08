<?php
session_start();
include 'db.php'; // Подключаем файл с базой данных

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Проверяем, заполнены ли поля
    if (empty($email) || empty($password)) {
        echo "<script>alert('Заполните все поля');</script>";
        exit();
    }

    // Проверяем, существует ли уже такой email
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);
    
    if ($stmt->rowCount() > 0) {
        echo "<script>alert('Этот email уже зарегистрирован');</script>";
        exit();
    }

    // Хешируем пароль
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Добавляем пользователя в базу
    $stmt = $pdo->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
    if ($stmt->execute([$email, $hashed_password])) {
        // Получаем ID нового пользователя
        $user_id = $pdo->lastInsertId();

        // Сохраняем данные в сессию
        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_email'] = $email;

        // Перенаправляем на главную страницу
        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Ошибка при регистрации');</script>";
    }
}
?>
