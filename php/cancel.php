<?php
    require_once 'database.php';

    $id = $_GET['id'];

    mysqli_query($sql, "DELETE FROM `zayavki` WHERE `id` = '$id'");

    header ('Location: ../admin/admin.php#new');
?>