<?php

require('../db/DataBaseConnect.php');

    $db = new DataBaseConnect();
    $label= $_POST['select'];
    print_r($db->getStudentsList($label));