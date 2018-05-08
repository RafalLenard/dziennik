<?php

    require('../db/DataBaseConnect.php');

    $db = new DataBaseConnect();
    $group_id= $_POST['group_id'];
    print_r($db->getLessonsList($group_id));
