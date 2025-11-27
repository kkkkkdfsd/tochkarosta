<?php
    session_start();
    require_once 'database.php';

    $name = $_POST['name'];
    $class = $_POST['class'];
    $phone = $_POST['phone'];
    $id = '11';

    $zayavka = mysqli_query($sql, "INSERT INTO `zayavki` (`id`, `name`, `class`, `phone`, `id_admin`) 
    VALUES (NULL, '$name', '$class', '$phone', '$id')");

    if($zayavka) {
        $_SESSION['msg'] = 'Заявка отправлена';
        header ('Location: ../direction/index_it.php#form');
    }

?>