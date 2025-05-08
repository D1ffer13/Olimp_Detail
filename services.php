<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Наши услуги | Olimp Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        /* Стили для карточек услуг */
        .service-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: stretch;
        }
        .logo {
            width: 50px;
            height: auto;
            margin-right: 10px;
            border-radius: 25px;
        }
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
            margin-left: auto; /* Добавляем отступ слева */
        }
        .user-text {
            color: white;
            margin-right: 10px;
        }
        .service-card {
            display: flex;
            flex-direction: column;
            height: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 12px;
            overflow: hidden;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .service-card .card-body {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .media-container {
    position: relative;
    width: 100%;
    height: 0;
    padding-bottom: 66.67%; /* Соотношение сторон 3:2 (можно изменить под ваши нужды) */
    overflow: hidden;
}

/* Стиль для самого изображения */
.media-container img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ключевое свойство для сохранения пропорций */
    object-position: center; /* Центрирование изображения */
}

.carousel-control-prev, .carousel-control-next {
    width: 10%;
}

.carousel-indicators {
    margin-bottom: 0.5rem;
}

/* Для слайдера */
.carousel,
.carousel-inner,
.carousel-item {
    height: 100%;
}

/* Для слайдера внутри media-container */
.media-container .carousel {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.carousel-indicators button {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    margin: 0 4px;
}
        .media-container img,
        .media-container iframe {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card-body {
            flex: 1;
            padding: 20px;
        }

        .btn-primary {
            background-color: #0d6efd;
            border: none;
            padding: 10px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0b5ed7;
        }

        .row-cols-custom {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .row-cols-custom .col {
            flex: 1 1 320px;
            max-width: 400px;
        }

        /* Стили для аккордеона */
        .accordion{
            margin-top: 25px;
        }

        .accordion-item {
            border: none;
            margin-bottom: 15px;
            border-radius: 12px;
            overflow: hidden;
        }

        .accordion-button {
            background-color: #f8f9fa;
            font-weight: bold;
            padding: 15px 20px;
        }

        .accordion-button:not(.collapsed) {
            background-color: #e9ecef;
            color: #0d6efd;
        }

        .accordion-button:focus {
            box-shadow: none;
        }

        .accordion-body {
            padding: 20px;
            background-color: #f8f9fa;
        }

        /* Стили для изображения в аккордеоне */
        .accordion-image {
            max-height: 280px;
            /* Ограничиваем высоту изображения */
            object-fit: contain;
            /* Сохраняем пропорции */
            width: 100%;
        }

        /* Новый стиль для блока контента аккордеона */
        .accordion-content-row {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .accordion-text {
            padding-left: 20px;
        }

        @media (max-width: 768px) {
            .accordion-content-row {
                flex-direction: column;
            }

            .accordion-text {
                padding-left: 0;
                padding-top: 15px;
            }
        }

        /* Стили для заголовков */
        .section-title {
            position: relative;
            margin-bottom: 30px;
            padding-bottom: 15px;
        }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: #0d6efd;
        }
    </style>
</head>

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
        <li class="nav-item"><a href="services.html" class="nav-link text-white">Услуги</a></li>
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

    <div class="container my-4">
        <h2 class="text-center mb-4">Наши услуги</h2>

        <div class="text-center mb-4">
            <p class="lead mb-1">Детейлинг – это уход за автомобилем.</p>
            <p class="mb-2">Он необходим как для б/у, так и для новых авто.</p>
            <p class="fw-bold">Olimp Detail - Больше чем детейлинг!</p>
        </div>

      

        <h3 class="section-title">Комплексные работы</h3>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card service-card">
                    <div class="media-container">
                        <!-- Слайдер изображений -->
                        <div id="serviceCarousel1" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#serviceCarousel1" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#serviceCarousel1" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#serviceCarousel1" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/plenkf1.png" class="d-block w-100"
                                        alt="Антигравийная защита кузова фото 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/plenka2.png" class="d-block w-100"
                                        alt="Антигравийная защита кузова фото 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/plenks3.png" class="d-block w-100"
                                        alt="Антигравийная защита кузова фото 3">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#serviceCarousel1"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Предыдущий</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#serviceCarousel1"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Следующий</span>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Антигравийная защита кузова FULL BODY</h5>
                        <p class="card-text">Весь автомобиль оклеивается плёнкой. Максимальная защита от механических
                            повреждений и воздействия окружающей среды.</p>
                        <p><strong>Цена:</strong> 50,000 ₽ | <strong>Время:</strong> 2 дня</p>
                        <a href="#" class="btn btn-primary"
                            onclick="bookService('Антигравийная защита кузова FULL BODY')">Записаться</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card service-card">
                    <div class="media-container">
                        <!-- Слайдер для "Антигравийная защита кузова комплект LUX" -->
                        <div id="luxCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#luxCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#luxCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#luxCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/Антигравийная.jpg" class="d-block w-100" alt="Антигравийная защита кузова комплект LUX фото 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/киа.jpg" class="d-block w-100" alt="Антигравийная защита кузова комплект LUX фото 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/porog.png" class="d-block w-100" alt="Антигравийная защита кузова комплект LUX фото 3">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#luxCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Предыдущий</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#luxCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Следующий</span>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Антигравийная защита кузова комплект LUX</h5>
                        <p class="card-text">Капот полностью, передний бампер, передняя оптика, зеркала, крылья, полоска на крышу, стойки передние, торцы дверей, металлический порог в салоне, места под ручками, зона погрузки.</p>
                        <p><strong>Цена:</strong> 35,000 ₽ | <strong>Время:</strong> 1.5 дня</p>
                        <a href="#" class="btn btn-primary" onclick="bookService('Антигравийная защита кузова комплект LUX')">Записаться</a>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card service-card">
                    <div class="media-container">
                        <!-- Слайдер для "Бронь салона комплект FULL" -->
                        <div id="fullArmorCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#fullArmorCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#fullArmorCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#fullArmorCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/lux3.png" class="d-block w-100" alt="Бронь салона комплект FULL фото 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/salon2.jpg" class="d-block w-100" alt="Бронь салона комплект FULL фото 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/salon3.jpg" class="d-block w-100" alt="Бронь салона комплект FULL фото 3">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#fullArmorCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Предыдущий</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#fullArmorCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Следующий</span>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Бронь салона комплект FULL</h5>
                        <p class="card-text">Пороги, кик панели, боковые стойки, задняя консоль, дверные карты, уголки передних сидений. Полная защита салона от износа.</p>
                        <p><strong>Цена:</strong> 35,000 ₽ | <strong>Время:</strong> 1.5 дня</p>
                        <a href="#" class="btn btn-primary" onclick="bookService('Бронь салона комплект FULL')">Записаться</a>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card service-card">
                    <div class="media-container">
                        <!-- Слайдер для "Бронь салона комплект LUX" -->
                        <div id="luxArmorCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#luxArmorCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#luxArmorCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#luxArmorCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/lux1.jpg" class="d-block w-100" alt="Бронь салона комплект LUX фото 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/lux2.png" class="d-block w-100" alt="Бронь салона комплект LUX фото 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/salon1.jpg" class="d-block w-100" alt="Бронь салона комплект LUX фото 3">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#luxArmorCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Предыдущий</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#luxArmorCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Следующий</span>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Бронь салона комплект LUX</h5>
                        <p class="card-text">Пороги, кик панели, боковые стойки, задняя консоль. Оптимальный комплект для защиты наиболее уязвимых мест салона.</p>
                        <p><strong>Цена:</strong> 25,000 ₽ | <strong>Время:</strong> 1 день</p>
                        <a href="#" class="btn btn-primary" onclick="bookService('Бронь салона комплект LUX')">Записаться</a>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card service-card">
                    <div class="media-container">
                        <!-- Слайдер для "Комплект Risk zone" -->
                        <div id="riskZoneCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#riskZoneCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#riskZoneCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#riskZoneCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="risk-zone.jpg" class="d-block w-100" alt="Комплект Risk zone фото 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="risk-zone-2.jpg" class="d-block w-100" alt="Комплект Risk zone фото 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="risk-zone-3.jpg" class="d-block w-100" alt="Комплект Risk zone фото 3">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#riskZoneCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Предыдущий</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#riskZoneCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Следующий</span>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Комплект Risk zone</h5>
                        <p class="card-text">Защита передней оптики, торцов дверей, железных порогов(3см), МПР(места под ручками), зона погрузки плюс сетка в бампер.</p>
                        <p><strong>Цена:</strong> 25,000 ₽ | <strong>Время:</strong> 1.5 дня</p>
                        <a href="#" class="btn btn-primary" onclick="bookService('Комплект Risk zone')">Записаться</a>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="section-title mt-5">Отдельные работы</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card service-card">
                    <div class="media-container">
                        <img src="арки.jpg" alt="Шумоизоляция колесных арок">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Шумоизоляция колесных арок</h5>
                        <p class="card-text">Эффективное снижение шума от дороги. Устанавливаем качественные материалы с
                            высоким коэффициентом шумопоглощения.</p>
                        <p><strong>Цена:</strong> 15,000 ₽ | <strong>Время:</strong> 5 часов</p>
                        <a href="#" class="btn btn-primary"
                            onclick="bookService('Шумоизоляция колесных арок')">Записаться</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card service-card">
                    <div class="media-container">
                        <img src="двери.jpg" alt="Шумоизоляция дверей">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Шумоизоляция дверей</h5>
                        <p class="card-text">Уменьшение проникновения звуков в салон. Многослойная изоляция для
                            максимального комфорта.</p>
                        <p><strong>Цена:</strong> 10,000 ₽ | <strong>Время:</strong> 3 часа</p>
                        <a href="#" class="btn btn-primary" onclick="bookService('Шумоизоляция дверей')">Записаться</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card service-card">
                    <div class="media-container">
                        <img src="бампер.jpg" alt="Сетка в бампер">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Сетка в бампер</h5>
                        <p class="card-text">Установка сетки для защиты радиатора от камней, насекомых и других
                            повреждений на дороге.</p>
                        <p><strong>Цена:</strong> 10,000 ₽ | <strong>Время:</strong> 3 часа</p>
                        <a href="#" class="btn btn-primary" onclick="bookService('Сетка в бампер')">Записаться</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card service-card">
                    <div class="media-container">
                        <img src="фары.jpg" alt="Полировка фар">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Полировка фар</h5>
                        <p class="card-text">Восстановление прозрачности и яркости фар. Улучшение видимости в темное
                            время суток.</p>
                        <p><strong>Цена:</strong> 5,000 ₽ | <strong>Время:</strong> 2 часа</p>
                        <a href="#" class="btn btn-primary" onclick="bookService('Полировка фар')">Записаться</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card service-card">
                    <div class="media-container">
                        <img src="нано-керамика.jpg" alt="Нано-керамика">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Нано-керамика</h5>
                        <p class="card-text">Долговременная защита лакокрасочного покрытия. Усиленный блеск и
                            гидрофобный эффект.</p>
                        <p><strong>Цена:</strong> 35,000 ₽ | <strong>Время:</strong> 2 дня</p>
                        <a href="#" class="btn btn-primary" onclick="bookService('Нано-керамика')">Записаться</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card service-card">
                    <div class="media-container">
                        <img src="тонировка.jpg" alt="Тонировка стекол">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Тонировка стекол</h5>
                        <p class="card-text">Установка качественной тонировочной пленки. Защита от солнца и посторонних
                            глаз.</p>
                        <p><strong>Цена:</strong> от 8,000 ₽ | <strong>Время:</strong> 3 часа</p>
                        <a href="#" class="btn btn-primary" onclick="bookService('Тонировка стекол')">Записаться</a>
                    </div>
                </div>
            </div>
        </div>

          <!-- Аккордеон для услуг -->
          <div class="accordion mb-4" id="servicesAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        ЗАЩИТНАЯ ПЛЁНКА
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                    data-bs-parent="#servicesAccordion">
                    <div class="accordion-body">
                        <div class="accordion-content-row">
                            <div class="col-md-5">
                                <img src="img/защитаплен.jpg" alt="Защитная пленка" class="accordion-image">
                            </div>
                            <div class="col-md-7 accordion-text">
                                <ul>
                                    <li>Полиуретановая антигравийная пленка является лучшим материалом для защиты
                                        автомобиля. Все автовладельцы знают, что автомобили часто страдают от сколов,
                                        царапин и загрязнений. Чтобы сохранить его внешний вид в целости и сохранности,
                                        воспользуйтесь услугой оклейки авто антигравийной пленкой</li>
                                    <li>Пленка создана из прочного материала, который плотно прилегает к кузову и крепко
                                        держится, при этом сохраняя первоначальные формы изделия.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        ПОЛИРОВКА КУЗОВА
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#servicesAccordion">
                    <div class="accordion-body">
                        <div class="accordion-content-row">
                            <div class="col-md-5">
                                <img src="img/полировка.jpg" alt="Полировка кузова" class="accordion-image">
                            </div>
                            <div class="col-md-7 accordion-text">
                                <p>Полировка кузова автомобиля – это процесс восстановления внешнего вида лакокрасочного
                                    покрытия. Даже при бережной эксплуатации на поверхности кузова появляются
                                    микроцарапины, потертости и другие дефекты.</p>
                                <p>Наши специалисты проведут тщательную полировку вашего автомобиля, вернув ему
                                    первоначальный блеск и защитив от негативных внешних воздействий.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        ПОЛИРОВКА КУЗОВА КЕРАМИКОЙ
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#servicesAccordion">
                    <div class="accordion-body">
                        <div class="accordion-content-row">
                            <div class="col-md-5">
                                <img src="img/kerampp.jpeg" alt="Полировка кузова керамикой" class="accordion-image">
                            </div>
                            <div class="col-md-7 accordion-text">
                                <p>Керамическое покрытие – это инновационный метод защиты кузова автомобиля. Оно
                                    образует прочный защитный слой, который надежно защищает лакокрасочное покрытие от
                                    химических воздействий, ультрафиолета и механических повреждений.</p>
                                <ul>
                                    <li>Долговечность (до 3-5 лет)</li>
                                    <li>Высокая устойчивость к царапинам</li>
                                    <li>Защита от ультрафиолета</li>
                                    <li>Гидрофобный эффект</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        ХИМЧИСТКА САЛОНА
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#servicesAccordion">
                    <div class="accordion-body">
                        <div class="accordion-content-row">
                            <div class="col-md-5">
                                <img src="химчистка.jpg" alt="Химчистка салона" class="accordion-image">
                            </div>
                            <div class="col-md-7 accordion-text">
                                <p>Химчистка салона автомобиля – это комплексная процедура очистки всех элементов интерьера специальными составами и оборудованием. Мы удаляем загрязнения, пятна, неприятные запахи и аллергены.</p>
                                <p>Наши специалисты проведут тщательную очистку:</p>
                                <ul>
                                    <li>Сидений и обивки</li>
                                    <li>Ковриков</li>
                                    <li>Потолка</li>
                                    <li>Дверных карт</li>
                                    <li>Багажника</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        ДЕТЕЙЛИНГ МОЙКА
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#servicesAccordion">
                    <div class="accordion-body">
                        <div class="accordion-content-row">
                            <div class="col-md-5">
                                <img src="мойка.jpg" alt="Детейлинг мойка" class="accordion-image">
                            </div>
                            <div class="col-md-7 accordion-text">
                                <p>Детейлинг мойка – это не просто мойка автомобиля, а комплексная процедура очистки кузова и салона с применением профессиональных средств и технологий.</p>
                                <ul>
                                    <li>Бесконтактная мойка кузова</li>
                                    <li>Ручная мойка с применением специальных шампуней</li>
                                    <li>Очистка дисков и колесных арок</li>
                                    <li>Мойка днища</li>
                                    <li>Сушка кузова</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>

        <div class="bg-light p-4 mt-5 rounded">
            <h3 class="text-center mb-4">Почему выбирают нас</h3>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="text-center">
                        <div class="display-4 text-primary mb-2">
                            <i class="bi bi-award"></i>
                        </div>
                        <h5>Профессионализм</h5>
                        <p>Наши специалисты имеют сертификаты и многолетний опыт работы</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="text-center">
                        <div class="display-4 text-primary mb-2">
                            <i class="bi bi-tools"></i>
                        </div>
                        <h5>Качественные материалы</h5>
                        <p>Используем только сертифицированную продукцию лучших производителей</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="text-center">
                        <div class="display-4 text-primary mb-2">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h5>Гарантия</h5>
                        <p>Предоставляем гарантию на все виды работ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function bookService(serviceName) {
            const phoneNumber = "79001234567";
            const message = `Здравствуйте! Я хочу записаться на услугу: ${serviceName}.`;
            const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
            window.open(whatsappUrl, "_blank");
        }
    </script>
</body>

</html>