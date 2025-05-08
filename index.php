<?php
session_start();
?>




<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olimp Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  
</head>
<style>
    .logo {
        width: 50px;
        height: auto;
        margin-right: 10px;
        border-radius: 25px;
    }
/* Стили уведомлений */
.notification {
    position: fixed;
    top: 20px;
    right: 20px;
    padding: 15px 20px;
    color: white;
    font-size: 16px;
    border-radius: 5px;
    display: none;
}
.success { background-color: #28a745; } /* Зеленый для успеха */
.error { background-color: #dc3545; } /* Красный для ошибки */
.brand {
    white-space: nowrap; /* Запрещает перенос строки */
    display: flex; /* Для правильного выравнивания */
    align-items: center; /* Выравнивание по центру */
}

.nav-buttons {
    display: flex;
    gap: 10px; /* Задает расстояние между кнопками */
    white-space: nowrap; /* Запрещает перенос строк */
}



.nav {
    display: flex;
    justify-content: center;
    width: 100%;
    padding: 0;
}

.navbar {
    width: 100%;
    display: flex;
    justify-content: center;
}


.nav-link {
    text-decoration: none;
    color: white;
}

.auth-buttons {
    display: flex;
    align-items: center;
    gap: 10px;
}

.user-text {
    color: white;
    margin-right: 10px;
}

.booking-form {
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.booking-form h2 {
    margin-bottom: 15px;
    color: #333;
}

.form-group {
    margin-bottom: 15px;
    text-align: left;
}

.form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

.form-group input,
.form-group select {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    width: 100%;
    padding: 10px;
    font-size: 18px;
    background: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background: #0056b3;
}

</style>
<body>


<header class="bg-dark text-white py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <!-- Логотип и название -->
            <div class="d-flex align-items-center">
                <a href="index.php"><img src="img/olimp.jpeg" alt="Olimp Detail Logo" class="logo me-2"></a>
                <a href="index.php" style="color: white; text-decoration: none;">
                    <h1 class=" brand h3 mb-0">Olimp Detail</h1>
                </a>
            </div>

            <!-- Навигация -->
            <nav class="navbar navbar-expand-lg">
    <ul class="nav">
        <li class="nav-item"><a href="index.php" class="nav-link text-white">Главная</a></li>
        <li class="nav-item"><a href="about.php" class="nav-link text-white">О нас</a></li>
        <li class="nav-item"><a href="services.php" class="nav-link text-white">Услуги</a></li>
    </ul>

    <!-- Блок авторизации справа -->
    <div class="auth-buttons">
        <?php if (isset($_SESSION['user_email'])): ?>
            <a href="home.php" class="brand  btn btn-outline-light">Личный кабинет</a>
            <a href="logout.php" class="btn btn-primary">Выйти</a>
        <?php else: ?>
            <a href="login.html" class="btn btn-outline-light">Вход</a>
            <a href="register.html" class="btn btn-primary">Регистрация</a>
        <?php endif; ?>
    </div>
</nav>

    </header>
 <!-- Основной контент страницы -->
 <main class="container py-5">
        <!-- Баннер -->
        <section class="text-center mb-5">
            <div class="bg-light p-5 rounded">
                <h2>Добро пожаловать в Olimp Detail!</h2>
                <p class="lead">Премиум-услуги по детейлингу автомобилей. Высокое качество и внимание к деталям.</p>
                <a href="services.html" class="btn btn-primary btn-lg">Посмотреть услуги</a>
            </div>
        </section>

        <!-- Преимущества -->
        <section class="mb-5">
            <h3 class="mb-4">Почему выбирают нас</h3>
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="img/erasebg-transformed (1).png" alt="Качество" class="mb-3" style="width: 80px;">
                    <h5>Высокое качество</h5>
                    <p>Мы используем только лучшие материалы и технологии.</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="img/erasebg-transformed.png" alt="Скорость" class="mb-3" style="width: 80px;">
                    <h5>Быстрое выполнение</h5>
                    <p>Мы ценим ваше время и работаем оперативно.</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="img/erasebg-transformed (2).png" alt="Гарантия" class="mb-3" style="width: 80px;">
                    <h5>Гарантия результата</h5>
                    <p>Мы уверены в качестве наших услуг и предоставляем гарантию.</p>
                </div>
            </div>
        </section>

        <!-- Популярные услуги -->
        <section class="mb-5">
            <h3 class="mb-4">Популярные услуги</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://eastline-garage.ru/images/poliuretan/3-02.JPG" class="card-img-top"
                            style="height: 200px;" alt="Услуга 1">
                        <div class="card-body">
                            <h5 class="card-title">Антигравийная защита</h5>
                            <p class="card-text">Защита кузова автомобиля от повреждений и сколов.</p>
                            <a href="services.html" class="btn btn-primary">Узнать подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://static.tildacdn.pro/tild3037-3434-4361-a433-613265656162/4-04.jpg"
                            class="card-img-top" style="height: 200px;" alt="Услуга 2">
                        <div class="card-body">
                            <h5 class="card-title">Шумоизоляция</h5>
                            <p class="card-text">Комфортная и тихая поездка благодаря шумоизоляции.</p>
                            <a href="services.html" class="btn btn-primary">Узнать подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://a.d-cd.net/WpkszDdphQmProdcZzEX0SKRBuY-960.jpg" class="card-img-top"
                            style="height: 200px;" alt="Услуга 3">
                        <div class="card-body">
                            <h5 class="card-title">Бронирование салона</h5>
                            <p class="card-text">Защита интерьера вашего автомобиля на высшем уровне.</p>
                            <a href="services.html" class="btn btn-primary">Узнать подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Отзывы клиентов -->
        <section class="mb-5">
            <h3 class="mb-4">Отзывы наших клиентов</h3>
            <div id="reviewsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <blockquote class="blockquote text-center">
                            <p class="mb-4">"Отличное обслуживание и качество! Мой автомобиль выглядит как новый."</p>
                            <footer class="blockquote-footer">Андрей Иванов</footer>
                        </blockquote>
                    </div>
                    <div class="carousel-item">
                        <blockquote class="blockquote text-center">
                            <p class="mb-4">"Очень доволен услугами. Рекомендую всем!"</p>
                            <footer class="blockquote-footer">Мария Смирнова</footer>
                        </blockquote>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#reviewsCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#reviewsCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <!-- Форма обратной связи -->
        <section>
            <h3 class="mb-4">Свяжитесь с нами</h3>

          <!-- Блок для уведомлений -->
<div id="notification" class="notification"></div>

<form id="bookingForm" class="booking-form">
    <h2>Запись на услугу</h2>
    <div class="form-group">
        <label for="name">Ваше имя</label>
        <input type="text" name="name" id="name" placeholder="Введите имя" required>
    </div>

    <div class="form-group">
        <label for="phone">Телефон</label>
        <input type="tel" name="phone" id="phone" placeholder="+7 (___) ___-__-__" required inputmode="numeric">
    </div>  


    <div class="form-group">
        <label for="mail">Почта</label>           
        <input type="email" name="email" placeholder="Email" required>
    </div>  
 

    <div class="form-group">
        <label for="service">Выберите услугу</label>
        <select name="service" id="service" required>
            <option value=">Антигравийная защита кузова FULL BODY">Антигравийная защита кузова FULL BODY</option>
            <option value="Антигравийная защита кузова комплект LUX">Антигравийная защита кузова комплект LUX</option>
            <option value="Бронь салона комплект FULL">Бронь салона комплект FULL</option>
            <option value="Бронь салона комплект LUX">Бронь салона комплект LUX</option>
            <option value="Комплект Risk zone">Комплект Risk zone</option>
            <option value="Шумоизоляция колесных арок">Шумоизоляция колесных арок</option>
            <option value="Шумоизоляция дверей">Шумоизоляция дверей</option>
            <option value="Сетка в бампер">Сетка в бампер</option>
        </select>
    </div>

    <button type="submit">Записаться</button>
</form>

<script>
document.getElementById("bookingForm").addEventListener("submit", function(event) {
    event.preventDefault();

    let form = this;
    let formData = new FormData(form);

    fetch("submit.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json()) // Ожидаем JSON
    .then(data => {
        console.log(data); // Выводим ответ сервера в консоль
        showNotification(data.message, data.success ? "success" : "error");

        if (data.success) {
            form.reset();
        }
    })
    .catch(error => {
        console.error("Ошибка:", error);
        showNotification("Ошибка отправки заявки", "error");
    });
});

function showNotification(message, type) {
    let notification = document.getElementById("notification");
    notification.innerText = message;
    notification.className = "notification " + type;
    notification.style.display = "block";

    setTimeout(() => {
        notification.style.display = "none";
    }, 3000);
}
</script>
<script>
    document.getElementById("phone").addEventListener("input", function (e) {
        let value = e.target.value.replace(/\D/g, ""); // Убираем все нецифровые символы
        if (value.length > 11) value = value.slice(0, 11); // Ограничение по длине
    
        // Форматируем номер в виде +7 (___) ___-__-__
        let formatted = "+7 ";
        if (value.length > 1) formatted += `(${value.slice(1, 4)}`;
        if (value.length > 4) formatted += `) ${value.slice(4, 7)}`;
        if (value.length > 7) formatted += `-${value.slice(7, 9)}`;
        if (value.length > 9) formatted += `-${value.slice(9, 11)}`;
    
        e.target.value = formatted;
    });
    </script>


    <script>
document.addEventListener("DOMContentLoaded", function () {
    fetch("auth_check.php")
    .then(response => response.json())
    .then(data => {
        let authLinks = document.getElementById("authLinks");
        if (data.logged_in) {
            authLinks.innerHTML = `<span class="text-white me-3">Привет, ${data.username}</span>
                                   <a href="logout.php" class="btn btn-danger">Выйти</a>`;
        }
    })
    .catch(error => console.error("Ошибка проверки авторизации:", error));
});
</script>


        
    </main>

    <!-- Подвал сайта -->
    <footer class="bg-dark text-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Olimp Detail</h5>
                    <p>Профессиональный детейлинг центр</p>
                </div>
                <div class="col-md-4">
                    <h5>Контакты</h5>
                    <p>Телефон: +7 (900) 123-45-67</p>
                    <p>Email: info@olimpdetail.ru</p>
                </div>
                <div class="col-md-4">
                    <h5>Режим работы</h5>
                    <p>Пн-Пт: 9:00 - 20:00</p>
                    <p>Сб-Вс: 10:00 - 18:00</p>
                </div>
                <div class="col-md-4">
                    <a href=""><img width="48" height="48" src="https://img.icons8.com/lollipop/48/instagram-new.png" alt="instagram-new"/></a>
                    <a href=""><img width="48" height="48" src="https://img.icons8.com/color/48/whatsapp--v1.png" alt="whatsapp--v1"/></a>
                </div>
            </div>
            <div class="text-center mt-3">
                <p>&copy; 2025 Olimp Detail. Все права защищены.</p>
            </div>
        </div>
    </footer>

    <!-- Подключение Bootstrap и JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>