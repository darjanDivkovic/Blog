<?php

    session_start();

    require 'dbo.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT Password from users WHERE Username = '$username'")->fetch();

    if(empty($result)){
        echo 'No users with this username';
        $_SESSION['message'] = "No users with this username $username";
        header('Location: index.php');
    }
    else {
        if($result[0] == $password){
            echo $username;
            echo "'s password is correct!";
            // Check if user is Admin
            // If Admin go to Admin homepage
            // If User go to User homepage
        }
        else {
            echo $username;
            echo "'s password is incorrect!";
            $_SESSION['message'] = "$username 's password is incorrect!";
            header('Location: index.php');
        }
    }

?>