<?php
    session_start();
    require_once 'database.php';

    $date = $_POST['date'];
    $spisok = $_POST['spisok'];
    $id = $_SESSION['user'];
    $it = '11';
    $himbio = '12';
    if($id == $it){
    mysqli_query($sql, "INSERT INTO `visit` (`id`, `dayoflesson`, `spisok`)
    VALUES(null, '$date', '$spisok')");
    } elseif($id == $himbio){
        mysqli_query($sql, "INSERT INTO `visit_himbio` (`id`, `dayoflesson`, `spisok`)
    VALUES(null, '$date', '$spisok')");
    } else{
        mysqli_query($sql, "INSERT INTO `visit_phis` (`id`, `dayoflesson`, `spisok`)
    VALUES(null, '$date', '$spisok')");
    }

    header ('Location: ../admin/admin.php');
?>