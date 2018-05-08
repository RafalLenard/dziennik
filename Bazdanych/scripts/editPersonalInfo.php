<?php

require('../db/DataBaseConnect.php');

$db = new DataBaseConnect();
print_r($db->editPersonalInfo($_SESSION['id'], $_POST['pass'], $_POST['login'], $_POST['name'], $_POST['sur_name'],
    $_POST['email'], $_POST['newpass']));
