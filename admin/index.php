<?php
    session_start();
    require_once '../php/database.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/logo.webp" type="image/x-icon">
    <title>Авторизация</title>
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
                    </div>
                </nav>
            </div>
        </div>
            <main>
            <div class="auth">
                <div class="container">
                    <div class="form__inner">
                        <h3 class="form__title auth-title">Авторизация только для преподавателей</h3>
                        <div class="form__content">
                            <form action="../php/signin.php" class="content__form" method="post">
                                <label class="input-label" for="login">Логин</label>
                                <input type="text" class="form__input" name="login" placeholder="Введите логин">
                                <label class="input-label" for="password">Пароль</label>
                                <input type="password" class="form__input" name="password" placeholder="Введите пароль">
                                <input class="form-btn btn-custom2" type="submit" value="Отправить">
                                <?php
                                        echo '<p class="input-label"> ' . $_SESSION['message'] . ' </p> ';
                                        unset($_SESSION['message']);
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </main>
        </div>
    </body>
</html>