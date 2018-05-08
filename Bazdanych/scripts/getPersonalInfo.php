<?php


    require('../db/DataBaseConnect.php');

    $db = new DataBaseConnect();
    print_r($db->getPersonalInfo($_SESSION['id']));
