<?php
session_start();
header('Content-Type: application/json'); // Отправляем JSON-ответ

include 'db.php'; // Подключаем базу данных

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Проверяем, пришли ли все данные
    $name = trim($_POST['name'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $service = trim($_POST['service'] ?? '');

    if (empty($name) || empty($phone) || empty($service)) {
        echo json_encode(["success" => false, "message" => "❌ Заполните все поля!"]);
        exit();
    }

    // Запрос на добавление заявки в таблицу requests
    try {
        $stmt = $pdo->prepare("INSERT INTO requests (name, phone, email, service) VALUES (:name, :phone, :email, :service)");
        $stmt->execute([
            ':name' => $name,
            ':phone' => $phone,
            ':email' => $email,
            ':service' => $service
        ]);

        echo json_encode(["success" => true, "message" => "✅ Заявка успешно отправлена!"]);
    } catch (PDOException $e) {
        echo json_encode(["success" => false, "message" => "Ошибка базы данных: " . $e->getMessage()]);
    }
}
?>
