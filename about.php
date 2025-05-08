<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас - Автодетейлинг</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
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
        /* Стили для рейтинга */
        .rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: center;
            gap: 10px;
            margin: 20px 0;
        }

        .rating input {
            display: none;
        }

        .rating label {
            cursor: pointer;
            font-size: 30px;
            position: relative;
        }

        .rating label i {
            background: transparent;
            -webkit-text-stroke: 2px #ffd700;
            -webkit-background-clip: text;
            color: transparent;
            transition: all 0.2s ease;
        }

        .rating label:hover i,
        .rating label:hover ~ label i,
        .rating input:checked ~ label i {
            background: #ffd700;
            -webkit-background-clip: text;
            -webkit-text-stroke: 0;
            transform: scale(1.1);
        }

        .review-card {
            height: 100%;
            transition: transform 0.2s;
        }

        .review-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .review-text {
            font-style: italic;
            margin-bottom: 15px;
            color: #555;
        }

        .review-author {
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
        }

        .review-date {
            font-size: 0.85em;
            color: #888;
        }

        .review-rating {
            margin: 10px 0;
        }

        .review-rating .fas.fa-star {
            color: #ffd700;
        }

        .review-rating .far.fa-star {
            background: transparent;
            -webkit-text-stroke: 2px #ffd700;
            -webkit-background-clip: text;
            color: transparent;
        }

        /* Стили для маленького баннера */
        .banner-section {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/banner-bg.jpg');
            background-size: cover;
            background-position: center;
            padding: 40px 0; /* Уменьшаем отступы сверху и снизу */
            margin-bottom: 30px;
        }

        .banner-section h1 {
            font-size: 2.5rem; /* Уменьшаем размер заголовка */
            margin-bottom: 10px;
        }

        .banner-section .lead {
            font-size: 1.1rem; /* Уменьшаем размер подзаголовка */
            margin-bottom: 15px;
        }

        .banner-section .btn {
            padding: 8px 20px; /* Уменьшаем размер кнопки */
            font-size: 1rem;
        }

        /* Стили для бургер-меню */
        .navbar-toggler {
            display: none;
            border: none;
            padding: 0;
            width: 30px;
            height: 30px;
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
            width: 30px;
            height: 30px;
        }

        /* Стили для кнопки закрытия */
        .close-menu {
            display: none; /* Скрываем крестик по умолчанию */
        }

        @media (max-width: 768px) {
            .navbar-toggler {
                display: block;
            }

            .navbar {
                position: static;
            }

            .nav {
                display: none;
                position: fixed;
                top: 0;
                right: 0;
                bottom: 0;
                width: 250px;
                background-color: #212529;
                flex-direction: column;
                padding: 60px 0 20px;
                z-index: 1000;
                overflow-y: auto;
                transform: translateX(100%);
                transition: transform 0.3s ease-in-out;
            }

            .nav.show {
                display: flex;
                transform: translateX(0);
            }

            .nav-item {
                width: 100%;
                text-align: left;
                padding: 0 20px;
            }

            .nav-link {
                padding: 10px 0;
                display: block;
                border-bottom: 1px solid rgba(255,255,255,0.1);
            }

            .auth-buttons {
                margin: 20px;
                flex-direction: column;
                width: calc(100% - 40px); /* Учитываем отступы по бокам */
            }

            .auth-buttons .btn {
                width: 100%;
                margin: 5px 0;
            }

            .header-container {
                position: relative;
            }

            /* Затемнение фона при открытом меню */
            .nav::before {
                content: '';
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(0,0,0,0.5);
                z-index: -1;
                opacity: 0;
                transition: opacity 0.3s ease-in-out;
            }

            .nav.show::before {
                opacity: 1;
            }

            /* Кнопка закрытия меню */
            .nav::after {
                display: none;
            }

            .close-menu {
                display: flex; /* Показываем крестик только на мобильных */
                position: absolute;
                top: 15px;
                right: 15px;
                font-size: 28px;
                color: white;
                cursor: pointer;
                width: 30px;
                height: 30px;
                align-items: center;
                justify-content: center;
                background: none;
                border: none;
                padding: 0;
                z-index: 1001;
            }
        }
    </style>
</head>
<body>
    <!-- Навигация -->

<header class="bg-dark text-white py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <!-- Логотип и название -->
            <div class="d-flex align-items-center">
                <a href="index.php"><img src="olimp.jpeg" alt="Olimp Detail Logo" class="logo me-2"></a>
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

    <!-- Баннер -->
    <section class="banner-section text-white text-center">
        <div class="container">
            <h1 class="fw-bold">Автодетейлинг</h1>
            <p class="lead mb-3">Профессиональный уход за вашим автомобилем</p>
            <a href="#about" class="btn btn-outline-light mt-2">Узнать больше</a>
        </div>
    </section>

    <!-- О компании -->
    <section id="about" class="about-section">
        <div class="container">
            <h2 class="text-center">О компании</h2>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <p class="lead mb-4">Мы специализируемся на профессиональном уходе за автомобилями с 2010 года. Наша команда экспертов предоставляет высококачественные услуги по уходу за автомобилем, используя современное оборудование и премиальные материалы.</p>
                    <p>За годы работы мы обслужили тысячи довольных клиентов и заслужили репутацию надежного партнера в сфере автодетейлинга. Мы постоянно совершенствуем наши навыки и следим за новейшими тенденциями в индустрии.</p>
                </div>
                <div class="col-lg-6">
                    <img src="images/about-image.jpg" alt="О компании" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Миссия и ценности -->
    <section class="values-section bg-light">
        <div class="container">
            <h2 class="text-center">Миссия и ценности</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-star fa-3x mb-3"></i>
                            <h3>Качество</h3>
                            <p>Мы стремимся к совершенству в каждом аспекте нашей работы</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-handshake fa-3x mb-3"></i>
                            <h3>Доверие</h3>
                            <p>Честность и прозрачность во всех отношениях с клиентами</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-lightbulb fa-3x mb-3"></i>
                            <h3>Инновации</h3>
                            <p>Постоянное развитие и внедрение новых технологий</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Команда -->
    <section class="team-section">
        <div class="container">
            <h2 class="text-center">Наша команда</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="images/team1.jpg" class="card-img-top" alt="Специалист">
                        <div class="card-body text-center">
                            <h5>Александр Петров</h5>
                            <p class="text-primary">Главный специалист</p>
                            <p class="text-muted">Опыт работы: 10 лет</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="images/team2.jpg" class="card-img-top" alt="Специалист">
                        <div class="card-body text-center">
                            <h5>Мария Иванова</h5>
                            <p class="text-primary">Технолог</p>
                            <p class="text-muted">Опыт работы: 8 лет</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="images/team3.jpg" class="card-img-top" alt="Специалист">
                        <div class="card-body text-center">
                            <h5>Дмитрий Сидоров</h5>
                            <p class="text-primary">Мастер-детейлер</p>
                            <p class="text-muted">Опыт работы: 12 лет</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Преимущества -->
    <section class="advantages-section">
        <div class="container">
            <h2 class="text-center">Наши преимущества</h2>
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="text-center">
                        <i class="fas fa-clock"></i>
                        <h5>Быстрый сервис</h5>
                        <p>Эффективная работа без потери качества</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="text-center">
                        <i class="fas fa-tools"></i>
                        <h5>Современное оборудование</h5>
                        <p>Использование передовых технологий</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="text-center">
                        <i class="fas fa-shield-alt"></i>
                        <h5>Гарантия качества</h5>
                        <p>100% удовлетворенность клиентов</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="text-center">
                        <i class="fas fa-hand-holding-usd"></i>
                        <h5>Доступные цены</h5>
                        <p>Конкурентные цены на все услуги</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Отзывы -->
    <section class="testimonials-section">
        <div class="container">
            <h2 class="text-center">Отзывы клиентов</h2>
            
            <?php if (isset($_SESSION['user_email'])): ?>
            <!-- Форма отзыва для авторизованных пользователей -->
            <div class="row mb-5">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center mb-4">Оставить отзыв</h4>
                            <?php if (isset($_GET['success'])): ?>
                                <div class="alert alert-success">Спасибо за ваш отзыв!</div>
                            <?php endif; ?>
                            <?php if (isset($_GET['error'])): ?>
                                <div class="alert alert-danger">
                                    <?php 
                                    if ($_GET['error'] == 1) echo "Произошла ошибка при сохранении отзыва.";
                                    if ($_GET['error'] == 2) echo "Пожалуйста, заполните все поля корректно.";
                                    ?>
                                </div>
                            <?php endif; ?>
                            <form action="process_review.php" method="POST" class="review-form">
                                <div class="mb-4">
                                    <label for="review_name" class="form-label h6">Ваше имя для отзыва</label>
                                    <input type="text" class="form-control form-control-lg" id="review_name" name="review_name" required placeholder="Как вас представить?">
                                </div>
                                <div class="mb-4 text-center">
                                    <label class="form-label h6 d-block">Ваша оценка</label>
                                    <div class="rating">
                                        <input type="radio" name="rating" value="5" id="star5" required>
                                        <label for="star5" title="5 звезд"><i class="fas fa-star"></i></label>
                                        <input type="radio" name="rating" value="4" id="star4">
                                        <label for="star4" title="4 звезды"><i class="fas fa-star"></i></label>
                                        <input type="radio" name="rating" value="3" id="star3">
                                        <label for="star3" title="3 звезды"><i class="fas fa-star"></i></label>
                                        <input type="radio" name="rating" value="2" id="star2">
                                        <label for="star2" title="2 звезды"><i class="fas fa-star"></i></label>
                                        <input type="radio" name="rating" value="1" id="star1">
                                        <label for="star1" title="1 звезда"><i class="fas fa-star"></i></label>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="review_text" class="form-label h6">Ваш отзыв</label>
                                    <textarea class="form-control" id="review_text" name="review_text" rows="4" required placeholder="Расскажите о вашем опыте..."></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg px-5">Отправить отзыв</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <!-- Отображение отзывов -->
            <div class="row">
                <?php
                require_once 'config.php';
                $sql = "SELECT r.*, u.name FROM reviews r JOIN users u ON r.user_email = u.email ORDER BY r.created_at DESC LIMIT 6";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="col-md-4 mb-4">
                            <div class="card review-card">
                                <div class="card-body">
                                    <p class="review-text">"' . htmlspecialchars($row['review_text']) . '"</p>
                                    <h5 class="review-author">' . htmlspecialchars($row['name']) . '</h5>
                                    <div class="review-rating">';
                        for ($i = 1; $i <= 5; $i++) {
                            echo '<i class="' . ($i <= $row['rating'] ? 'fas' : 'far') . ' fa-star"></i>';
                        }
                        echo '</div>
                                    <small class="review-date">' . date('d.m.Y', strtotime($row['created_at'])) . '</small>
                                </div>
                            </div>
                        </div>';
                    }
                } else {
                    echo '<div class="col-12 text-center">
                        <p>Пока нет отзывов. Будьте первым!</p>
                    </div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Отзывы с 2ГИС -->
    <section class="testimonials-section bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Мы в 2ГИС</h2>
            <div class="row justify-content-center mb-4">
                <div class="col-auto">
                    <div class="d-flex align-items-center">
                        <a href="https://2gis.kz/pavlodar/firm/70000001059441233/tab/reviews" target="_blank" 
                           class="btn btn-outline-primary">Смотреть все отзывы на 2ГИС</a>
                    </div>
                </div>
            </div>
            
            <!-- Виджет с отзывами 2ГИС -->
            <div class="row">
                <div class="col-12">
                    <div id="2gis_widget" style="width:100%; height:600px;">
                        <script src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script>
                        <script>
                            new DGWidgetLoader({
                                "width": "100%",
                                "height": "100%",
                                "borderColor": "#a3a3a3",
                                "pos": {"lat": 52.266476, "lon": 76.983773, "zoom": 16},
                                "opt": {"city": "pavlodar"},
                                "org": [{"id": "70000001059441233"}]
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Призыв к действию -->
    <section class="cta-section text-white text-center">
        <div class="container">
            <h2>Готовы сделать ваш автомобиль идеальным?</h2>
            <p class="lead mb-4">Запишитесь на консультацию прямо сейчас!</p>
            <a href="index.php#bookingForm" class="btn btn-primary btn-lg">Связаться с нами</a>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    function toggleMenu() {
        const menu = document.getElementById('navMenu');
        menu.classList.toggle('show');
    }

    // Закрывать меню при клике вне его
    document.addEventListener('click', function(event) {
        const menu = document.getElementById('navMenu');
        const toggler = document.querySelector('.navbar-toggler');
        if (!menu.contains(event.target) && !toggler.contains(event.target) && menu.classList.contains('show')) {
            menu.classList.remove('show');
        }
    });

    // Закрывать меню при изменении размера окна
    window.addEventListener('resize', function() {
        const menu = document.getElementById('navMenu');
        if (window.innerWidth > 768 && menu.classList.contains('show')) {
            menu.classList.remove('show');
        }
    });
    </script>
</body>
</html>
