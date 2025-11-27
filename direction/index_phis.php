<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/logo.webp" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <title>Точка Роста - Физика</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="block-header" data-bs-theme="dark">
            <div class="block-header__container" style="display: flex; justify-content: center;">
                <nav class="navbar navbar-expand-lg bg-body-tertiary " data-bs-theme="dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="../index.php">
                            <img src="../img/logo.webp" alt="tochka rosta" style="height: 50px; width: 50px;">
                        </a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link link-custom" aria-current="page" href="#about">Про кружок</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link link-custom"" href=" #programms" role="button" aria-expanded="false">
                                        Программы обучения
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link link-custom"" href=" #form" role="button" aria-expanded="false">
                                        Записаться на курс
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link link-custom"" href=" #contacts" role="button" aria-expanded="false">
                                        Контакты
                                    </a>
                                </li>
                                <li class="nav-item">
                                <?php
                                    if (isset($_SESSION['user'])) {
                                        echo '<a class="nav-link link-custom"" href=" ../admin/admin.php" role="button" aria-expanded="false">
                                        <img src="../img/authorization.webp" alt="" style="width: 35px; height:35px;">
                                    </a>';
                                    } else {
                                        echo '<a class="nav-link link-custom"" href=" ../admin/index.php" role="button" aria-expanded="false">
                                        <img src="../img/authorization.webp" alt="" style="width: 35px; height:35px;">
                                    </a>';
                                    }
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <main class="main">
            <section class="about" id="about">
                <div class="container">
                    <div class="about__inner">
                        <div class="about__content">
                            <div class="about__left">
                                <h1 class="about__title"><img src="../img/tochka.webp" alt="" style="width:300px;height: 95px;"></h1>
                                <p class="about__text">Точка роста - это образовательная программа, которая предоставляет учащимся возможность изучать различные научные дисциплины, включая физику. Физика в Точке роста помогает учащимся изучать основные физические законы и принципы. Учащиеся могут проводить эксперименты и исследования, чтобы лучше понять физические явления и законы. Программа также развивает у учащихся критическое мышление и способность применять полученные знания в практических ситуациях.</p>
                                <div class="col-12">
                                    <a href="#form">
                                        <button type="submit" class="btn btn-custom">Записаться</button>
                                    </a>
                                </div>
                            </div>
                            <div class="about__right">
                                <img class="about-img" src="../img/about-phis.jpeg" alt="" srcset="" style="max-width:580px; border-radius: 50px; margin-top: 130px;">
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
                            <div class="programms__box" style="display: flex; justify-content: center;">
                                <div class="programms__box-first">
                                    <a href="#programms__wonder">
                                        <img class="programms-img" src="../img/wonder.jpeg" alt="" srcset="" style="border-radius: 10px;">
                                        <p class="programm__text"><b>Удивительное рядом</b></p>
                                    </a>
                                </div>
                                <div class="programms__box-second">
                                    <a href="#programms__around">
                                        <img class="programms-img" src="../img/phis_around.jpeg" alt="" style="border-radius: 10px;">
                                        <p class="programm__text"><b>Физика вокруг нас</b></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="programms__arrow">
                            <a href="#programms__wonder" class="arrow__link">
                                <img src="../img/arrow.webp" width="40" srcset="">
                            </a>
                        </div>
                        <div class="programms__minecraft" id="programms__wonder">
                            <p class="programms__text">Удивительное рядом</p>
                            <span class="programms__span">Курс "Удивительное рядом" в Точке роста - это образовательная программа, которая помогает учащимся изучать удивительные явления и законы физики. Учащиеся проводят эксперименты и исследования, чтобы лучше понять физические явления и законы. Программа также развивает у учащихся критическое мышление и способность применять полученные знания в практических ситуациях.</span>
                        </div>
                        <div class="programms__python" id="programms__around">
                            <p class="programms__text">Физика вокруг нас</p>
                            <span class="programms__span">Курс "Физика вокруг нас" в Точке роста - это образовательная программа, которая помогает учащимся понять, как физические законы и принципы проявляются в повседневной жизни. Учащиеся изучают основные физические законы и принципы, проводят эксперименты и исследования, чтобы лучше понять физические явления и законы. Программа также развивает у учащихся критическое мышление и способность применять полученные знания в практических ситуациях.</span>
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
                            <form action="../php/newzayavka_phis.php" class="content__form" method="post">
                                <label class="input-label" for="name">Введите ваше ФИО</label>
                                <input type="text" class="form__input" name="name" maxlength="100" required>
                                <label class="input-label" for="class">Введите ваш класс</label>
                                <input type="text" class="form__input" name="class" maxlength="3" required>
                                <label class="input-label" for="phone">Введите номер телефона</label>
                                <input type="number" class="form__input" name="phone" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==11) return false;" placeholder="8 888 888 88 88" required>
                                <button type="submit" class="form-btn btn btn-custom2" style="margin-top: 20px;">Отправить</button>
                                <?php
                                echo '<p class="input-label"> ' . $_SESSION['msg_phis'] . ' </p> ';
                                unset($_SESSION['msg_phis']);
                                ?>
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
                                    <span>
                                        <h4>
                                            00:00
                                        </h4>
                                    </span>
                                </div>

                            </ul>
                            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Acc0e6162b0230b1556aad063595a14676d410b67632126348d2195a664b1fa8b&amp;source=constructor" width="600" height="450" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="footer">
            <div class="container">
                <div class="footer__inner">
                    <nav class="nav">
                        <a href="#about" class="nav__link footer-link">Про кружок</a>
                        <a href="#programms" class="nav__link footer-link">Наши программы</a>
                        <a href="#form" class="nav__link footer-link">Записаться на кружок</a>
                        <a href="#contacts" class="nav__link footer-link">Контакты</a>
                        <a href="../admin/index.php">
                            <img src="../img/logo.webp" alt="tochka rosta" style="height: 50px; width: 50px;">
                        </a>

                    </nav>
                </div>
            </div>
        </footer>
    </div>
    <script src="../js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../js/clock.js"></script>
</body>

</html>