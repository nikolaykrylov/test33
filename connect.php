<?php

require 'login.php';

$con = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
mysqli_set_charset($con, "utf8");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
}


?>
