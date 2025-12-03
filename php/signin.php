<?php
session_start();

// Подключаем файл с настройками БД и функцией verifyPassword
require_once 'database.php';

// Получаем данные из формы
$login = $_POST['login'] ?? '';
$password = $_POST['password'] ?? '';

if ($login && $password) {
    try {
        // Подготовленный запрос для безопасности
        $stmt = $pdo->prepare("SELECT id, login, password, name, role FROM admin WHERE login = ?");
        $stmt->execute([$login]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // Проверяем логин и пароль
        if ($row && $row['login'] === $login && verifyPassword($password, $row['password'])) {
            // Успешный вход
            $_SESSION['user'] = [
                'id' => $row['id'],
                'name' => $row['name'],
                'role' => $row['role']
            ];
            header('Location: ../admin/admin.php');
            exit();
        } else {
            // Ошибка — неверный логин или пароль
            $_SESSION['message'] = 'Неверный логин или пароль';
            header('Location: ../admin/index.php');
            exit();
        }
    } catch (PDOException $e) {
        // Ошибка подключения/запроса
        $_SESSION['message'] = 'Ошибка базы данных';
        header('Location: ../admin/index.php');
        exit();
    }
} else {
    // Пустые поля
    $_SESSION['message'] = 'Заполните все поля';
    header('Location: ../admin/index.php');
    exit();
}
?>