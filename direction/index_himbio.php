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
    <title>Точка Роста - ХимБио</title>
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
                                <p class="about__text">В "Точке роста" учащиеся изучают химию и биологию, проводят практические занятия и эксперименты с использованием современного оборудования. Это помогает им применять знания на практике, развивать навыки и интерес к науке и технологиям. В рамках направления Химии учащиеся изучают основные химические реакции, свойства веществ, законы сохранения массы и энергии, а также принципы работы с химическими реагентами. В направлении Биологии учащиеся изучают структуру и функции живых организмов, их взаимодействие с окружающей средой, а также основные принципы генетики и эволюции.</p>
                                <div class="col-12">
                                    <a href="#form">
                                        <button type="submit" class="btn btn-custom">Записаться</button>
                                    </a>
                                </div>
                            </div>
                            <div class="about__right">
                                <img class="about-img" src="../img/about-him.jpeg" alt="" srcset="" style="max-width:580px; border-radius: 50px; margin-top: 130px;">
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
                            <div class="programms__box">
                                <div class="programms__box-first">
                                    <a href="#programms__practicbio">
                                        <img class="programms-img" src="../img/descr-practic_bio.jpeg" alt="" srcset="" style="border-radius: 10px;">
                                        <p class="programm__text"><b>Практическая биология </b></p>
                                    </a>
                                </div>
                                <div class="programms__box-second">
                                    <a href="#programms__livelib">
                                        <img class="programms-img" src="../img/live-lab.jpeg" alt="" style="border-radius: 10px;">
                                        <p class="programm__text"><b>Живая лаборатория</b></p>
                                    </a>
                                </div>
                                <div class="programms__box-second">
                                    <a href="#programms__himsoc">
                                        <img class="programms-img" src="../img/him-and-social.jpeg" alt="" style="border-radius: 10px;">
                                        <p class="programm__text"><b>Химия и общество</b></p>
                                    </a>
                                </div>
                                <div class="programms__box-second">
                                    <a href="#programms__mastproj">
                                        <img class="programms-img" src="../img/mast-project.jpeg" alt="" style="border-radius: 10px;">
                                        <p class="programm__text"><b>Мастерская проектов</b></p>
                                    </a>
                                </div>
                                <div class="programms__box-second">
                                    <a href="#programms__biohim">
                                        <img class="programms-img" src="../img/biohim.jpeg" alt="" style="border-radius: 10px;">
                                        <p class="programm__text"><b>БиоХимия</b></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="programms__arrow">
                            <a href="#programms__practicbio" class="arrow__link">
                                <img src="../img/arrow.webp" width="40" srcset="">
                            </a>
                        </div>
                        <div class="programms__minecraft" id="programms__practicbio">
                            <p class="programms__text">Практическая биология </p>
                            <span class="programms__span">Умение работать с разными источниками биологической информации, анализировать и оценивать информацию, преобразовывать информацию из одной формы в другую - это важные навыки, которые необходимы для успешного изучения биологии.
                                Работа с разными источниками биологической информации включает в себя чтение книг, статей, просмотр видео, использование онлайн-ресурсов и других материалов. Умение анализировать и оценивать информацию означает способность понимать, как информация была получена, какие методы использовались для ее получения, какие ограничения и предположения были сделаны, и как эта информация может быть использована в контексте.</span>
                        </div>
                        <div class="programms__python" id="programms__livelib">
                            <p class="programms__text">Живая лаборатория</p>
                            <span class="programms__span">Выделение существенных признаков биологических объектов и процессов является важной частью изучения биологии. Существенные признаки - это те характеристики, которые отличают один биологический объект или процесс от другого.
                                В отношении биологических объектов, существенные признаки могут включать в себя такие характеристики, как форма, размер, структура, функции и поведение. Например, существенными признаками клетки являются ее форма, размер, наличие ядра, цитоплазмы и других органелл, а также ее способность к делению и синтезу белков.</span>
                        </div>
                        <div class="programms__html" id="programms__himsoc">
                            <p class="programms__text">Химия и общество</p>
                            <span class="programms__span">Программы, направленные на развитие экологической культуры обучающихся, обычно включают в себя различные мероприятия и активности, которые помогают учащимся понять важность сохранения природы и здоровья. Это может включать в себя уроки, на которых учащиеся изучают основы экологии, биологические процессы, происходящие в природе, и как они влияют на окружающую среду. Также могут проводиться практические занятия, на которых учащиеся могут проводить эксперименты и исследования, связанные с экологией и здоровьем.</span>
                        </div>
                        <div class="programms__python" id="programms__mastproj">
                            <p class="programms__text">Мастерская проектов</p>
                            <span class="programms__span">На этом курсе происходит знакомство с современными проблемами избранного актуального направления науки, основными перспективами его развития, освоение основных положений методологии-исследовательской и проектной деятельности и их практического применения.Развитие представлений о сборе и первичной обработке материалов при естественно-научных исследованнях закрепление и расширение учебного материала, познания в области физики, химии, биологии.</span>
                        </div>
                        <div class="programms__html" id="programms__biohim">
                            <p class="programms__text">Биохимия</p>
                            <span class="programms__span">Биохимия - это наука, которая изучает химический состав живых клеток и организмов, а также химические процессы, лежащие в основе их жизнедеятельности. Она находится на стыке биологии и химии и изучает молекулярные процессы, протекающие в клетках живых организмов. Биохимия также включает в себя изучение обмена веществ в различных частях человеческого организма, таких как кровь, ткани, органы, а также при различных состояниях, таких как заболевания и мышечная деятельность. Биохимия также может включать в себя изучение альтернативных форм жизни и влияния радиации на химический состав и процессы организмов.</span>
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
                            <form action="../php/newzayavka_himbio.php" class="content__form" method="post">
                                <label class="input-label" for="name">Введите ваше ФИО</label>
                                <input type="text" class="form__input" name="name" maxlength="100" required>
                                <label class="input-label" for="class">Введите ваш класс</label>
                                <input type="text" class="form__input" name="class" maxlength="3"required>
                                <label class="input-label" for="phone">Введите номер телефона</label>
                                <input type="number" class="form__input" name="phone" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==11) return false;" placeholder="8 888 888 88 88" required>
                                <button type="submit" class="form-btn btn btn-custom2" style="margin-top: 20px;">Отправить</button>
                                <?php
                                echo '<p class="input-label"> ' . $_SESSION['msg_himbio'] . ' </p> ';
                                unset($_SESSION['msg_himbio']);
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