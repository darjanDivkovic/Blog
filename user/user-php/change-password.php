<?php

session_start();

require '../../dbo.php';

$username = $_SESSION['username'];

$oldPassword = $_POST['oldPassword'];
$newPassword = $_POST['newPassword'];

$currentPassword = $conn->query("SELECT Password FROM users WHERE Username = '$username'")->fetch();


if($oldPassword == $currentPassword[0]){

    $sql = "UPDATE users SET Password=? WHERE Username=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$newPassword, $username]);
    $_SESSION['returnMessage'] = 'Password change Succesfull!';
    header('Location: ./user-home.php'); 

}
else
{
    $_SESSION['returnMessage'] = "The password your typed in is not correct!";
    header('Location: ./user-home.php');
}

?>