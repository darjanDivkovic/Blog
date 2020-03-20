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
    <link rel="stylesheet" href="../user-style/user-home-style.css">
    <title>User Homepage</title>
</head>
<body>

    <div id="background-wrapper">

    <div id="status-bar">
        <h1 id="welcome">Welcome  <span><?php echo $_SESSION['username']; ?></span></h1>
        <h1 id="status">status <span>User</span></h1>
        
    </div>

    <div id="sidebar">
        <div id="toggle-btn" class="toggle-btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
        
        <h1>Options</h1>
        <ul>
            <li> 
                <button class="options-button" id="changePassword">Change Password</button>
            </li>
            <li> 
                <form action="../user-php/log-out.php" method="get">
                <button type="submit" class="options-button">Log out</button>
                </form>
            </li>
        </ul>
    </div>

    <div id="cards">
   
    </div>

    <div id="job-container">
        <button id="X-job-container">X</button>
    </div>

    </div>

    

    <div id="change-password-box">
        <form action="../user-php/change-password.php" method="POST">
        <button type="button" id="X-button-changePassword">X</button>
        <h1>Change Password</h1>
        <input type="password" name="oldPassword" id="oldPassword" placeholder="old password">
        <br>
        <input type="password" name="newPassword" id="newPassword" placeholder="new password">
        <br>
        <input type="password" name="retypeNewPassword" id="retypeNewPassword" placeholder="retype password">
        <br>
        <button type="submit" onclick="return verify();">Change</button>
        </form>
    </div>

    <h1 id="returnMessage">
    <?php
        if(isset($_SESSION['returnMessage'])){
                    echo $_SESSION['returnMessage'];
                 };
                
    ?>
    </h1>

    <script src="../user-scripts/user-script.js"></script>
    <script src="../user-scripts/user-verify.js"></script>
    <script src="../user-scripts/cards-script.js"></script>
    <script src="../user-scripts/checkout-job.js"></script>
</body>
</html>