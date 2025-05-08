<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['user_email'])) {
    header('Location: login.html');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_email = $_SESSION['user_email'];
    $rating = intval($_POST['rating']);
    $review_text = trim($_POST['review_text']);
    $review_name = trim($_POST['review_name']);

    if ($rating >= 1 && $rating <= 5 && !empty($review_text) && !empty($review_name)) {
        // Обновляем имя пользователя в таблице users
        $update_name = "UPDATE users SET name = ? WHERE email = ?";
        $stmt = $conn->prepare($update_name);
        $stmt->bind_param("ss", $review_name, $user_email);
        $stmt->execute();

        // Добавляем отзыв
        $sql = "INSERT INTO reviews (user_email, rating, review_text) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sis", $user_email, $rating, $review_text);
        
        if ($stmt->execute()) {
            header('Location: about.php?success=1');
        } else {
            header('Location: about.php?error=1');
        }
    } else {
        header('Location: about.php?error=2');
    }
} else {
    header('Location: about.php');
} 