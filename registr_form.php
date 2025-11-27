<!-- 
<!DOCTYPE html>
<html>
<head>
<title>Регистрация</title>
<meta charset="utf-8">
</head>
<body>
<p>Регистрация:</p>
<form action="registr.php" method="post">
  <input name="login" placeholder="Логин">
  <input type="password" name="password" placeholder="Пароль">
  <input type="password" name="password_confirm" placeholder="Повторите Пароль">
  <input type="text" name="name" placeholder="ФИО">
  <input type="submit" value="Зарегистрароваться">
</form>
</body>
</html> -->
<?php
    session_start();
    require_once 'php/database.php';
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
    <title>Регистрация</title>
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
                    </div>
                </nav>
            </div>
        </div>
            <main>
            <div class="auth">
                <div class="container">
                    <div class="form__inner">
                        <h3 class="form__title auth-title">Регистрация преподавателей</h3>
                        <div class="form__content">
                            <form action="php/registr.php" class="content__form" method="post">
                                <label class="input-label" for="login">Логин</label>
                                <input type="text" class="form__input" name="login" placeholder="Введите логин">
                                <label class="input-label" for="password">Пароль</label>
                                <input type="password" class="form__input" name="password" placeholder="Введите пароль">
                                <label class="input-label" for="password_confirm">Повторите пароль</label>
                                <input type="password" class="form__input" name="password_confirm" placeholder="Повторите пароль">
                                <label class="input-label" for="name">ФИО</label>
                                <input type="text" class="form__input" name="name" placeholder="Введите ФИО">
                                <input class="form-btn btn-custom2" type="submit" value="Отправить">
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