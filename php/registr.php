<?php



$login = $_POST['login'];
$pas = $_POST['password'];
$password_confirm = $_POST['password_confirm'];
$name = $_POST['name'];
$db = mysqli_connect('localhost', 'root', '', 'kruzhok');
$role = 'user';

if ($pas === $password_confirm) {
    $pas = md5($pas);
    $query = "INSERT INTO admin (login, password, name, role) VALUES ('$login', '$pas', '$name', '$role')";
    $result = mysqli_query($db, $query);
    if($result)
    header("Location: ../index.php");
else{
    header("Location: ../registr_form.php");
}
    mysqli_close($db);
}
