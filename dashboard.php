<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<h1>Добро пожаловать в личный кабинет!</h1>
<p>Ваш email: <?php echo $_SESSION['user_email']; ?></p>
