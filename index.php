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
    <link rel="shortcut icon" href="img/logo.webp" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_person.css">
    <link rel="stylesheet" href="css/index_style.css">
    <title>Точка Роста</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="block-header" data-bs-theme="dark">
            <div class="block-header__container" style="display: flex; justify-content: center;">
                <nav class="navbar navbar-expand-lg bg-body-tertiary " data-bs-theme="dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.php">
                            <img src="img/logo.webp" alt="tochka rosta" style="height: 50px; width: 50px;">
                        </a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <?php
                                    if (isset($_SESSION['user'])) {
                                        echo '<a class="nav-link link-custom"" href=" admin/admin.php" role="button" aria-expanded="false">
                                        <img src="img/authorization.webp" alt="" style="width: 35px; height:35px;">
                                    </a>';
                                    } else {
                                        echo '<a class="nav-link link-custom"" href=" admin/index.php" role="button" aria-expanded="false">
                                        <img src="img/authorization.webp" alt="" style="width: 35px; height:35px;">
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
            <section>
                <div class="container">
                    <div class="programms__python" id="programms__js">
                        <h1 class="programms__text-main_text" style="display:flex; justify-content: center; margin-bottom: 40px;"><br>Точка Роста</h1>
                        <span class="programms__span" style="text-align: center;">"Точка Роста" — это федеральная сеть центров образования цифрового, естественнонаучного, технического и гуманитарного профилей, организованная в рамках проекта "Современная школа". Создается на базе сельских школ и общеобразовательных учреждений малых городов численностью до 60 тыс. человек. Центры не имеют статус юридического лица, а являются структурными подразделениями образовательных организаций. Призваны обеспечить высокий уровень образования, дать равные возможности для обучения всех детей в независимости от места их проживания.</span>
                    </div>
                </div>
            </section>
            <section class="programms" id="programms">
                <div class="container">
                    <div class="programms__inner">
                        <h2 class="programms__title">Наши направления</h2>
                        <div class="programms__content">
                            <div class="programms__box">
                                <div class="programms__box-first">
                                    <a href="direction/index_it.php">
                                        <img class="programms-img" src="img/it.webp" alt="" srcset="" style="border-radius: 10px;">
                                        <p class="programm__text"><b>ИВТ и программирование</b></p>
                                    </a>
                                </div>
                                <div class="programms__box-second">
                                    <a href="direction/index_himbio.php">
                                        <img class="programms-img" src="img/himbio.webp" alt="" style="border-radius: 10px;">
                                        <p class="programm__text"><b>Химия и Биология</b></p>
                                    </a>
                                </div>
                                <div class="programms__box-third">
                                    <a href="direction/index_phis.php">
                                        <img class="programms-img" src="img/phis.webp" alt="" style="border-radius: 10px; max-width:350px;">
                                        <p class="programm__text"><b>Физика</b></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="footer">
            <div class="container">
                <div class="footer__inner">
                    <nav class="nav" style="display: flex; justify-content:center;">
                        <a href="admin/index.php">
                            <img src="img/logo.webp" alt="tochka rosta" style="height: 50px; width: 50px;">
                        </a>

                    </nav>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>