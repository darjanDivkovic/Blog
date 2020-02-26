<?php

    require 'dbo.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT Password from users WHERE username = '$username'")->fetch();

    if(empty($result)){
        echo 'No users with this username';
    }
    else {
        if($result[0] == $password){
            echo $username;
            echo "'s password is correct!";
        }
        else {
            echo $username;
            echo "'s password is incorrect!";
        }
    }

?>