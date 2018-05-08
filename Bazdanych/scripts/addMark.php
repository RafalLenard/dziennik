<?php


    require('../db/DataBaseConnect.php');

    $db = new DataBaseConnect();
    $user_id= $_POST['user_id'];
    $lesson_id= $_POST['lesson_id'];
    $mark_label= $_POST['mark_label'];
    $mark= $_POST['mark'];
    $mark_comment= $_POST['mark_comment'];
    print_r($db->addMark($user_id,$lesson_id,$mark_label,$mark,$mark_comment));