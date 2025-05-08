<?php
session_start();
include 'db.php'; // Подключаем базу данных

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    echo "❌ Доступ запрещен!";
    exit();
}

// Проверяем, установлено ли соединение с базой данных
if (!isset($pdo)) {
    die("Ошибка: Подключение к базе данных не установлено!");
}

// Получаем список пользователей


// Получаем заявки пользователей
try {
    $stmt = $pdo->query("SELECT * FROM requests");
    $requests = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Ошибка запроса заявок: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ-панель</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css"> <!-- Подключаем стили -->
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .admin-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: #333; /* Цвет фона можно изменить */
    color: white;
}

.admin-title {
    flex-grow: 1;
    text-align: center;
    font-size: 24px;
    font-weight: bold;
}



    .logout-button {
        background: #007bff;
        color: white;
        margin-left: auto; 
        padding: 10px 15px;
        text-decoration: none;
        border-radius: 5px;
        font-size: 16px;
    }
    .logout-btn:hover {
        background: #0056b3;
    }
    main {
        width: 80%;
        margin: 20px auto;
        background: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px #ccc;
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: left;
    }
    th {
        background: #333;
        color: white;
    }
    tr:nth-child(even) {
        background: #f9f9f9;
    }
</style>
<body>
<div class="admin-header">
    <div class="admin-title">Админ-панель</div>
    <a href="logout.php" class="btn btn-primary logout-button">Выйти</a>
</div>

    <main>
        

        <h2>Заявки пользователей</h2>
        <?php if (count($requests) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Имя</th>
                        <th>Email</th>
                        <th>Телефон</th>
                        <th>Услуга</th>
                        <th>Дата заявки</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($requests as $row): ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= htmlspecialchars($row['name']) ?></td>
                            <td><?= htmlspecialchars($row['email']) ?></td>
                            <td><?= htmlspecialchars($row['phone']) ?></td>
                            <td><?= htmlspecialchars($row['service']) ?></td>
                            <td><?= $row['created_at'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Заявок пока нет.</p>
        <?php endif; ?>
    </main>
</body>
</html>
