<?php
require_once("../db/DataBaseConnect.php");

if(isset($_POST['group_name']))
{
    $label = $_POST['group_name'];
    $db = new DataBaseConnect();
    print_r($db->addGroup($label));
}