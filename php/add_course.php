<?php
    session_start();
    require_once 'database.php';

    $date = $_POST['date'];
    $name_course = $_POST['name_course'];
    $name_topic = $_POST['name_topic'];
    $id = $_SESSION['user'];
    $it = '11';
    $himbio = '12';
    if($id == $it){
    mysqli_query($sql, "INSERT INTO `add_course_it` (`id`, `data`, `name_course`, `name_topic`)
    VALUES(null, '$date', '$name_course', '$name_topic')");
    } elseif($id == $himbio){
        mysqli_query($sql, "INSERT INTO `add_course_himbio` (`id`, `data`, `name_course`, `name_topic`)
    VALUES(null, '$date', '$name_course', '$name_topic')");
    } else{
        mysqli_query($sql, "INSERT INTO `add_course_phis` (`id`, `data`, `name_course`, `name_topic`)
    VALUES(null, '$date', '$name_course', '$name_topic')");
    }

    header ('Location: ../admin/admin.php');
?>