<?php
session_start();
require_once 'database.php';
if (isset($_POST['login'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $password = md5($password);
    $link = mysqli_query($sql, "SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$password'");
    $result = mysqli_fetch_array($link);
    if ($password == $result['password']) {
        $_SESSION['user'] = $result['id'];
        header("Location: ../admin/admin.php");
    } else {
        header("Location:../admin/index.php");
        echo'<p class="error"> Не верно ввели логин или пароль</p>';
    }
}
?>