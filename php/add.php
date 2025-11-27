<?php
    require_once 'database.php';

    $id = $_GET['id'];

    mysqli_query($sql, "INSERT INTO `students` (`id`, `name`, `class`, `phone`, `id_admin`) 
    SELECT `id`, `name`, `class`, `phone`, `id_admin` FROM `zayavki` WHERE `id` = '$id'");

    mysqli_query($sql, "DELETE FROM `zayavki` WHERE `zayavki`.`id` = '$id'");

    header('Location: ../admin/admin.php#spisok');
?>