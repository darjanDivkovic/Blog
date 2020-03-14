<?php

    session_start();

    require 'dbo.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT Password from users WHERE Username = '$username'")->fetch();

    if(empty($result)){
        echo 'No users with this username';
        $_SESSION['message'] = "No users with username | $username |";
        header('Location: index.php');
    }
    else {
        if($result[0] == $password){
            echo $username;
            echo "'s password is correct!";
            // Check if user is Admin
            $isAdmin = $conn->query("SELECT IsAdmin FROM users WHERE Username = '$username'")->fetch();
            if($isAdmin['IsAdmin'] == 1){
                // Go to Admin Homepage
                $_SESSION['username'] = $username;
                header('Location: ./admin/admin-home.php');
            }else{
                // If User go to User homepage
                $_SESSION['username'] = $username;
                header('Location: ./user/user-home.php');
            }
           
        }
        else {
            echo $username;
            echo "'s password is incorrect!";
            $_SESSION['message'] = "$username 's password is incorrect!";
            header('Location: index.php');
        }
    }

?>