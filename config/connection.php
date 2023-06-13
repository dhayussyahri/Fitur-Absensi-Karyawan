<?php

$hostname = "localhost";
$username = "root";
$password = "";
$db       = "absensi";

$db = new mysqli ($hostname, $username, $password, $db);

if ($db->connect_error){
    echo"Connection error";
}

?>