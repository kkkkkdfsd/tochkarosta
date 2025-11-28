<?php
session_start();

// 1. Проверка авторизации — защищает доступ к админке
if (!isset($_SESSION['user']) || empty($_SESSION['user']['id'])) {
    header('Location: /');
    exit();
}

// 2. Подключение к БД — нужно только авторизованным пользователям
require_once '../php/database.php';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/logo.webp" type="image/x-icon">
    <title>Панель администратора</title>
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
                                    <a class="nav-link link-custom" aria-current="page" href="#visit"> Отметить посещения</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link link-custom" href="#new" role="button" aria-expanded="false">
                                        Новые заявки
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link link-custom" href="#spisok" role="button" aria-expanded="false">
                                        Список участников
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link link-custom" href="../php/logout.php" role="button" aria-expanded="false">
                                        Выход
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        

        <main class="main">
            <section class="visit" id="visit">
                <div class="container">
                    <div class="visit__inner">
                        <h1 class="visit__title">Отметка посещения</h1>
                        <div class="visit__content">
                            <form action="../php/visit.php" class="content__form" method="post">
                                <label class="input-label visit-label" for="date">Дата</label>
                                <input type="date" class="form__input" name="date">
                                <label class="input-label visit-label" for="spisok">Список учеников (через запятую)</label>
                                <textarea type="text" class="form__area" name="spisok" rows="10" cols="45" maxlength="500"></textarea>
                                <input class="form-btn visit-btn" type="submit" value="Отправить">
                            </form>
                            <select name="ds" id="">
                                <option value="">1hr7ygnjtrjjyjuytj4</option>
                                <option value="">2</option>
                                <option value="">3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <section class="visit" id="visit">
                <div class="container">
                    <div class="visit__inner">
                        <h1 class="visit__title">Добавить урок</h1>
                        <div class="visit__content">
                            <form action="../php/add.php" class="content__form" method="post">
                                <label class="input-label visit-label" for="date">Дата</label>
                                <input type="date" class="form__input" name="date">
                                <label class="input-label visit-label" for="spisok">Название курса</label>
                                <textarea type="text" class="form__area" name="spisok" rows="1" cols="45" maxlength="500"></textarea>
                                <label class="input-label visit-label" for="spisok">Название темы</label>
                                <textarea type="text" class="form__area" name="spisok" rows="1" cols="45" maxlength="500"></textarea>
                                <input class="form-btn visit-btn" type="submit" value="Отправить">
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            </section>
            <section class="new" id="new">
                <div class="container">
                    <div class="new__inner">
                        <h2 class="new__title">Новые заявки</h2>
                        <div class="new__content">
                            <table class="new__table" >

                                <?php
                                include('../php/database.php');
                                $id = $_SESSION['user'];
                                $zayavki = mysqli_query($sql, "SELECT * FROM `zayavki` WHERE $id = id_admin");
                                $zayavki = mysqli_fetch_all($zayavki);
                                foreach ($zayavki as $zayavki) {
                                ?>
                                    <tr style="border: 1px solid black;">
                                        <td style="border: 1px solid black;"><?= $zayavki[2] ?></td>
                                        <td style="border: 1px solid black;"><?= $zayavki[1] ?></td>
                                        <td style="border: 1px solid black;"><?= $zayavki[3] ?></td>
                                        <td style="border: 1px solid black;"><a href="../php/add.php?id=<?= $zayavki[0] ?>" class="zayavki-btn">Одобрить</a></td>
                                        <td style="border: 1px solid black;"><a href="../php/cancel.php?id=<?= $zayavki[0] ?>" class="zayavki-btn cancel-btn">Отклонить</a></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </table>
                        </div>
                    </div>
            </section>
            <section class="spisok" id="spisok">
                <div class="container">
                    <div class="spisok__inner">
                        <h2 class="spisok__title">Список участников</h2>
                        <div class="spisok__content">
                            <table class="spisok__table">
                                <tbody>
                                    <tr style="border: 1px solid black;">
                                        <td style="border: 1px solid black;"><b>ФИО</td>
                                        <td style="border: 1px solid black;"><b>Класс</td>
                                        <td style="border: 1px solid black;"><b>Номер телефона</td>
                                    </tr>
                                <?php
                                $id = $_SESSION['user'];
                                $students = mysqli_query($sql, "SELECT * FROM `students` WHERE $id = id_admin");
                                $students = mysqli_fetch_all($students);
                                foreach ($students as $students) {
                                    
                                ?>
                                
                                    
                                    <tr style="border: 1px solid black;">
                                        <td style="border: 1px solid black;"><?= $students[1] ?></td>
                                        <td style="border: 1px solid black;"><?= $students[2] ?></td>
                                        <td style="border: 1px solid black;"><?= $students[3] ?></td>
                                        
                                    </tr>
                                    
                                <?php
                                }
                                ?>
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
            </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>