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
    <link rel="stylesheet" href="./user-home-style.css">
    <title>User Homepage</title>
</head>
<body>
    <div id="status-bar">
        <h1 id="welcome">Welcome  <span><?php echo $_SESSION['username']; ?></span></h1>
        <h1 id="status">status <span>User</span></h1>
        
    </div>

    <div id="options">
        <button class="options-button" id="changePassword">Change Password</button>
        <form action="./log-out.php" method="get">
        <button type="submit" class="options-button">Log out</button>
        </form>
    </div>
</body>
</html>