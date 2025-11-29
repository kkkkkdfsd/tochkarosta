<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Кружок по программированию для школьников. Изучение Pascal, Python, C++, JavaScript и других языков.">
    
    <!-- Preconnect для шрифтов -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
          crossorigin="anonymous">
    
    <link rel="shortcut icon" href="../img/logo.webp" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <title>Точка Роста - IT</title>
</head>

<body>
    <div class="wrapper">
        <div class="block-header" data-bs-theme="dark">
            <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
                <div class="container">
                    <a class="navbar-brand" href="../index.php">
                        <img src="../img/logo.webp" alt="Логотип Точка Роста" width="50" height="50">
                    </a>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link link-custom" aria-current="page" href="#about">Про кружок</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-custom" href="#programms">Программы обучения</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-custom" href="#form">Записаться на курс</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-custom" href="#contacts">Контакты</a>
                        </li>
                        <li class="nav-item">
                            <?php if (isset($_SESSION['user']) && !empty($_SESSION['user']['id'])): ?>
                                <a class="nav-link" href="../admin/admin.php" aria-label="Личный кабинет">
                                    <img src="../img/authorization.webp" alt="Иконка профиля" width="35" height="35">
                                </a>
                            <?php else: ?>
                                <a class="nav-link" href="../admin/index.php" aria-label="Войти">
                                    <img src="../img/authorization.webp" alt="Иконка входа" width="35" height="35">
                                </a>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <main class="main">
            <section class="about" id="about">
    <div class="container">
        <div class="about__inner">
            <div class="about__content">
                <div class="row align-items-center">
                    <!-- Картинка слева -->
                    <div class="col-lg-6 col-md-12 d-none d-md-block">
                        <img class="about-img img-fluid" src="../img/about-img.webp" alt="Фото занятий" style="max-width: 100%; height: auto;">
                    </div>
                    <!-- Текст справа -->
                    <div class="col-lg-6 col-md-12">
                        <h1 class="about__title">
                            <img src="../img/tochka.webp" alt="Логотип Точка Роста" style="width:300px;height: 95px;">
                        </h1>
                        <p class="about__text">
                            Изучение основ программирования, алгоритмов и структур данных. 
                            Включает в себя использование компьютерных классов и робототехнических наборов для разработки и программирования. 
                            Учащиеся используют компьютерные классы для разработки и программирования. 
                            Они работают с различными языками программирования, такими как Python, Java, C++ и другие. 
                            Они учатся создавать программы, обрабатывать данные, работать с графическим интерфейсом и разрабатывать веб-приложения.
                        </p>
                        <div class="col-12">
                            <a href="#form">
                                <button type="button" class="btn btn-custom">Записаться</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

            <section class="programms" id="programms">
                <div class="container">
                    <div class="programms__inner">
                        <h2 class="programms__title">Наши программы</h2>
                        <div class="programms__content">
                            <div class="programms__items">
                                <div class="programms__box">
                                    <a href="#programms__pascal">
                                        <img class="programms-img" src="../img/pascal.webp" alt="Курс по Pascal" loading="lazy">
                                        <p class="programm__text"><b>Pascal</b></p>
                                    </a>
                                </div>
                                <div class="programms__box">
                                    <a href="#programms__python">
                                        <img class="programms-img" src="../img/python.webp" alt="Курс по Python" loading="lazy">
                                        <p class="programm__text"><b>Python</b></p>
                                    </a>
                                </div>
                                <div class="programms__box">
                                    <a href="#programms__kumir">
                                        <img class="programms-img" src="../img/kumir.webp" alt="Курс по Kumir" loading="lazy">
                                        <p class="programm__text"><b>Kumir</b></p>
                                    </a>
                                </div>
                                <div class="programms__box">
                                    <a href="#programms__c">
                                        <img class="programms-img" src="../img/c++.webp" alt="Курс по C++" loading="lazy">
                                        <p class="programm__text"><b>C++</b></p>
                                    </a>
                                </div>
                                <div class="programms__box">
                                    <a href="#programms__info">
                                        <img class="programms-img" src="../img/pg.webp" alt="Углубленное изучение информатики" loading="lazy">
                                        <p class="programm__text"><b>Углубленное изучение информатики</b></p>
                                    </a>
                                </div>
                                <div class="programms__box">
                                    <a href="#programms__js">
                                        <img class="programms-img" src="../img/js.webp" alt="Курс по JavaScript" loading="lazy">
                                        <p class="programm__text"><b>JavaScript</b></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="programms__arrow">
                            <a href="#programms__pascal" class="arrow__link">
                                <img src="../img/arrow.webp" width="40" alt="Вниз">
                            </a>
                        </div>
                        <div class="programms__pascal" id="programms__pascal">
                            <p class="programms__text">Pascal</p>
                            <span class="programms__span">На занятиях ребенок сделает первые шаги в написании кода на профессиональном языке,
                                погрузится в мир программирования
                                на языке JavaScript и научится применять полученные навыки как в Майнкрафте,
                                так и в других сферах диджитал мира.</span>
                        </div>
                        <div class="programms__python" id="programms__python">
                            <p class="programms__text">Python</p>
                            <span class="programms__span">Курс предназначен для учащихся 8—11 классов средней общеобразовательной школы, интересующихся программированием,
                                информационными технологиями и основами написания компьютерных игр. В курсе изучается один из важнейших на сегодняшний день языков программирования
                                – Python, а также основы двумерной компьютерной графики и подходы к написанию компьютерных игр.</span>
                        </div>
                        <div class="programms__html" id="programms__kumir">
                            <p class="programms__text">Kumir</p>
                            <span class="programms__span">В системе КуМир используется школьный алгоритмический язык с русской лексикой и встроенными исполнителями Робот и Чертёжник.При вводе программы КуМир осуществляет постоянный полный контроль ее правильности, сообщая на полях программы об всех обнаруженных ошибках.</span>
                        </div>
                        <div class="programms__python" id="programms__c">
                            <p class="programms__text">C++</p>
                            <span class="programms__span">C++ - это мощный язык программирования, который широко используется в разработке программного обеспечения. Он предлагает высокую производительность и гибкость, что делает его идеальным для создания эффективных и масштабируемых приложений. C++ поддерживает объектно-ориентированное программирование, что позволяет разрабатывать сложные системы с использованием классов и объектов. Он также предоставляет прямой доступ к памяти и низкоуровневым функциям, что делает его полезным для системного программирования и разработки игр.</span>
                        </div>
                        <div class="programms__html" id="programms__info">
                            <p class="programms__text">Углубленное изучение информатики</p>
                            <span class="programms__span">Углубленное изучение информатики включает в себя изучение более продвинутых тем и концепций, связанных с информационными технологиями. Это может включать в себя изучение более сложных языков программирования, таких как C++, Java или Python, а также изучение алгоритмов, структур данных, баз данных, сетей и других технологий. Углубленное изучение информатики также может включать в себя изучение специализированных областей, таких как искусственный интеллект, машинное обучение или разработка программного обеспечения.</span>
                        </div>
                        <div class="programms__python" id="programms__js">
                            <p class="programms__text">JavaScript</p>
                            <span class="programms__span">На занятиях ребенок сделает первые шаги в написании кода на профессиональном языке,
                                погрузится в мир программирования
                                на языке JavaScript и научится применять полученные навыки в разных сферах диджитал мира.</span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="form" id="form">
                <div class="container">
                    <div class="form__inner">
                        <h3 class="form__title">Записаться на кружок</h3>
                        <p class="form__subtitle">Заполните заявку и нажмите кнопку отправить, <br>
                            мы получим вашу заявку и внесем вас в список участников нашего кружка.</p>
                        <div class="form__content">
                            <form action="../php/newzayavka.php" class="content__form" method="post">
                                <label class="input-label" for="name">Введите ваше ФИО</label>
                                <input type="text" class="form__input" name="name" maxlength="100" required>
                                <label class="input-label" for="class">Введите ваш класс</label>
                                <input type="text" class="form__input" name="class" maxlength="3" required>
                                <label class="input-label" for="phone">Введите номер телефона</label>
                                <input type="tel" class="form__input" name="phone" pattern="[0-9]{11}" placeholder="88888888888" required>
                                <button type="submit" class="form-btn btn btn-custom2" style="margin-top: 20px;">Отправить</button>
                                <?php if (!empty($_SESSION['msg'])): ?>
                                    <p class="input-label text-danger">
                                        <?= htmlspecialchars($_SESSION['msg'], ENT_QUOTES, 'UTF-8') ?>
                                    </p>
                                    <?php unset($_SESSION['msg']); ?>
                                <?php endif; ?>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <section class="contacts" id="contacts">
                <div class="container">
                    <div class="contacts__inner">
                        <h4 class="contacts__title">Наши контакты</h4>
                        <div class="contacts__content">
                            <ul class="contacts__ul">
                                <li class="contacts__li">Страна: <span>Россия</span></li>
                                <li class="contacts__li">Индекс: <span>659780</span></li>
                                <li class="contacts__li">Регион: <span>Алтайский край</span></li>
                                <li class="contacts__li">Район: <span>Родинский район</span></li>
                                <li class="contacts__li">Город: <span>с. Родино</span></li>
                                <li class="contacts__li">Улица: <span>ул.Ленина, 230</span></li>
                                <div class="js-clock">
                                    <h3>Время:</h3>
                                    <span><h4>00:00</h4></span>
                                </div>
                            </ul>
                            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Acc0e6162b0230b1556aad063595a14676d410b67632126348d2195a664b1fa8b&amp;source=constructor" 
                                    width="600" height="450" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="footer">
            <div class="container">
                <div class="footer__inner">
                    <nav class="nav d-flex flex-wrap justify-content-center">
                        <a href="#about" class="nav__link footer-link mx-2">Про кружок</a>
                        <a href="#programms" class="nav__link footer-link mx-2">Наши программы</a>
                        <a href="#form" class="nav__link footer-link mx-2">Записаться на кружок</a>
                        <a href="#contacts" class="nav__link footer-link mx-2">Контакты</a>
                        <a href="../admin/index.php" class="mx-2">
                            <img src="../img/logo.webp" alt="Логотип Точка Роста" width="50" height="50">
                        </a>
                    </nav>
                </div>
            </div>
        </footer>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
            crossorigin="anonymous"></script>
    <script src="../js/main.js"></script>
    <script src="../js/clock.js"></script>
</body>

</html>