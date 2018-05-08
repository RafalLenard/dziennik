<?php

require_once("../db/DataBaseConnect.php");

    $db = new DataBaseConnect();
    print_r($db->addLesson($_POST['group_name'], $_POST['date'], $_POST['label']));