<?php


    require 'dbo.php';

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $result = $conn->query("SELECT username FROM users");

    
?>