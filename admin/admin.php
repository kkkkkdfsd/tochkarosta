<?php
session_start();

// 1. Проверка авторизации — защищает доступ к админке
if (!isset($_SESSION['user']) || empty($_SESSION['user']['id'])) {
    header('Location: ../admin/index.php');
    exit();
}

// 2. Подключение к БД — нужно только авторизованным пользователям
require_once '../php/database.php';

// Получаем ID текущего администратора
$admin_id = $_SESSION['user']['id'];
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Панель администратора — Точка Роста</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/logo.webp" type="image/x-icon">
</head>

<body>
    <div class="wrapper">
        <div class="block-header" data-bs-theme="dark">
            <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="../index.php">
                        <img src="../img/logo.webp" alt="Логотип Точка Роста" width="50" height="50">
                    </a>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#visit">Отметить посещения</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#new">Новые заявки</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#spisok">Список участников</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#courses">Курсы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../php/logout.php">Выход</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <main class="main">
            <!-- === Отметка посещения === -->
            <section class="visit" id="visit">
                <div class="container">
                    <div class="visit__inner">
                        <h1 class="visit__title">Отметка посещения</h1>
                        <div class="visit__content">
                            <form action="../php/attendance.php" class="content__form" method="post">
                                <label class="input-label visit-label" for="lesson_date">Дата урока</label>
                                <input type="date" class="form__input" name="lesson_date" required>

                                <label class="input-label visit-label" for="course_type">Направление</label>
                                <select class="form__input" name="course_type" required>
                                    <option value="it">Информатика</option>
                                    <option value="himbio">Химия и биология</option>
                                    <option value="phis">Физика</option>
                                </select>

                                <label class="input-label visit-label" for="student_ids">ID студентов (через запятую)</label>
                                <input type="text" class="form__input" name="student_ids" placeholder="1, 2, 3" required>

                                <input class="form-btn visit-btn" type="submit" value="Отметить">
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <!-- === Добавить курс === -->
            <section class="visit" id="courses">
                <div class="container">
                    <div class="visit__inner">
                        <h1 class="visit__title">Добавить урок</h1>
                        <div class="visit__content">
                            <form action="../php/add_course.php" class="content__form" method="post">
                                <label class="input-label visit-label" for="course_type">Направление</label>
                                <select class="form__input" name="course_type" required>
                                    <option value="it">Информатика</option>
                                    <option value="himbio">Химия и биология</option>
                                    <option value="phis">Физика</option>
                                </select>

                                <label class="input-label visit-label" for="name_course">Название курса</label>
                                <input type="text" class="form__input" name="name_course" maxlength="500" required>

                                <label class="input-label visit-label" for="name_topic">Название темы</label>
                                <input type="text" class="form__input" name="name_topic" maxlength="200" required>

                                <label class="input-label visit-label" for="data">Дата</label>
                                <input type="date" class="form__input" name="data" required>

                                <input class="form-btn visit-btn" type="submit" value="Добавить">
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <!-- === Новые заявки === -->
            <section class="new" id="new">
                <div class="container">
                    <div class="new__inner">
                        <h2 class="new__title">Новые заявки</h2>
                        <div class="new__content">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>ФИО</th>
                                        <th>Класс</th>
                                        <th>Телефон</th>
                                        <th>Действия</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $stmt = $pdo->prepare("SELECT * FROM zayavki WHERE id_admin = ?");
                                    $stmt->execute([$admin_id]);
                                    $zayavki = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                    foreach ($zayavki as $zayavka):
                                    ?>
                                        <tr>
                                            <td><?= htmlspecialchars($zayavka['id']) ?></td>
                                            <td><?= htmlspecialchars($zayavka['name']) ?></td>
                                            <td><?= htmlspecialchars($zayavka['class']) ?></td>
                                            <td><?= htmlspecialchars($zayavka['phone']) ?></td>
                                            <td>
                                                <a href="../php/approve.php?id=<?= $zayavka['id'] ?>" class="btn btn-success btn-sm">Одобрить</a>
                                                <a href="../php/cancel.php?id=<?= $zayavka['id'] ?>" class="btn btn-danger btn-sm">Отклонить</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <!-- === Список участников === -->
            <section class="spisok" id="spisok">
                <div class="container">
                    <div class="spisok__inner">
                        <h2 class="spisok__title">Список участников</h2>
                        <div class="spisok__content">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>ФИО</th>
                                        <th>Класс</th>
                                        <th>Телефон</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $stmt = $pdo->prepare("SELECT * FROM students WHERE id_admin = ?");
                                    $stmt->execute([$admin_id]);
                                    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                    foreach ($students as $student):
                                    ?>
                                        <tr>
                                            <td><?= htmlspecialchars($student['id']) ?></td>
                                            <td><?= htmlspecialchars($student['name']) ?></td>
                                            <td><?= htmlspecialchars($student['class']) ?></td>
                                            <td><?= htmlspecialchars($student['phone']) ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <!-- === Курсы === -->
            <section class="courses" id="courses">
                <div class="container">
                    <div class="courses__inner">
                        <h2 class="courses__title">Курсы</h2>
                        <div class="courses__content">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Направление</th>
                                        <th>Название курса</th>
                                        <th>Тема</th>
                                        <th>Дата</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $stmt = $pdo->prepare("SELECT * FROM courses WHERE id IN (
                                        SELECT id FROM students WHERE id_admin = ?
                                    )");
                                    $stmt->execute([$admin_id]);
                                    $courses = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                    foreach ($courses as $course):
                                    ?>
                                        <tr>
                                            <td><?= htmlspecialchars($course['id']) ?></td>
                                            <td><?= htmlspecialchars($course['course_type']) ?></td>
                                            <td><?= htmlspecialchars($course['name_course']) ?></td>
                                            <td><?= htmlspecialchars($course['name_topic']) ?></td>
                                            <td><?= htmlspecialchars($course['data']) ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>