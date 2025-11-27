<?php
    session_start();
    require_once 'database.php';

    $name = $_POST['name'];
    $class = $_POST['class'];
    $phone = $_POST['phone'];
    $id = '13';

    $zayavka = mysqli_query($sql, "INSERT INTO `zayavki` (`id`, `name`, `class`, `phone`, `id_admin`) 
    VALUES (NULL, '$name', '$class', '$phone', '$id')");

    if($zayavka) {
        $_SESSION['msg_phis'] = 'Заявка отправлена';
        header ('Location: ../direction/index_phis.php#form');
    }

?>