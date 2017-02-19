<?php
require 'connect.php';

if (isset ($_POST['name']) &&
    isset ($_POST['surname']) &&
    isset ($_POST['email']) &&
    isset ($_POST['password'])) {

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO `robin_table_4` VALUES (NULL, '$name', '$surname', '$email', '$password');";

    $info = mysqli_query($con, $query);
}

?>

