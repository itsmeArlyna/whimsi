<?php
$db = new mysqli('localhost', 'root', '', "online_shop");

if ($db->connect_error){
    die("Connection failed: " . $db->connect_error);
}
?>