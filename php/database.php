 <?php
//  $host = 'localhost';  // Хост, у нас все локально
//  $user = 'root';    // Имя созданного вами пользователя
//  $pass = ''; // Установленный вами пароль пользователю
//  $db_name = 'kruzhok';   // Имя базы данных
//  $sql = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой

  // Ругаемся, если соединение установить не удалось
//  if (!$sql) {
//    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
//   exit;
//  }


$host = 'localhost';
$dbname = 'kruzhok';
$username = 'root';  // замените на свой
$password = '';      // замените на свой

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Ошибка подключения: " . $e->getMessage());
}

// Функция для хэширования пароля
function hashPassword($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}

// Функция для проверки пароля
function verifyPassword($password, $hash) {
    return password_verify($password, $hash);
}
?> 