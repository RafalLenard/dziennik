<?php


    require('../db/DataBaseConnect.php');

    $db = new DataBaseConnect();
    $user_id= $_POST['user_id'];
    print_r($db->getAllStudentInfo($user_id));