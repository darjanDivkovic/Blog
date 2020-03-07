<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./admin-home-style.css">
    <title>Admin Homepage</title>
</head>
<body>
    <div id="status-bar">
        <h1 id="welcome">Welcome  <span><?php echo $_SESSION['username']; ?></span></h1>
        <h1 id="status">status <span>Admin</span></h1>
        <button id="changePassword">CHANGE PASSWORD</button>
    </div>

    <div id="change-password-box">
        <form action="http://www.rebol.com/cgi-bin/test-cgi.cgi" method="POST">
        <button type="button" id="X-button-changePassword">X</button>
        <h1>Change Password</h1>
        <input type="text" name="oldPassword" id="oldPassword" placeholder="old password">
        <br>
        <input type="text" name="newPassword" id="newPassword" placeholder="new password">
        <br>
        <input type="text" name="retypeNewPassword" id="retypeNewPassword" placeholder="retype password">
        <br>
        <button type="submit" onclick="return verify();">Change</button>
        </form>
    </div>


    <script src="./admin-script.js"></script>
    <script src="./admin-verify.js"></script>
</body>
</html>