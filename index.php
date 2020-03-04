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
    <link rel="stylesheet" href="style.css">
    <title>Blog</title>
</head>
<body>
    <div id="header-container">
        <button id="register-button">Register</button>
        <button id="log-in-button">Log in</button>
    </div>
    
    <div id="register-box">
       <form action="http://www.rebol.com/cgi-bin/test-cgi.cgi" method="POST">
        
            <button type="button" id="X-button-register">X</button>
            <h1>Register</h1>
            <br>
            <input type="text" name="name" id="register-name" placeholder="name">
            <input type="text" name="surname" id="register-surname" placeholder="surname">
            <input type="text" name="username" id="register-username" placeholder="username">
            <input type="password" name="password" id="register-password" placeholder="password">
            <input type="password" id="register-password-confirm" placeholder="confirm password">
            <input type="email" name="email" id="register-email" placeholder="email">
            <br>
            <button type="submit" onclick="return verifyRegister();">SUBMIT</button>
       </form> 
    </div>
    <div id="login-box">
        <form action="log-in.php" method="POST">
        
        <button type="button" id="X-button-login">X</button>

        <h1>Log in</h1>
        <br>
        <input type="text" name="username" id="username-input" placeholder="username">
        <br>
        <input type="password" name="password" id="password-input" placeholder="password">
        <br>
        <button type="submit" id="button-login" onclick="return verifyLogIn();">Log in</button>
        
        </form>

    </div>

    <div id="message-container">
        <p id="message">
            aa
            <?php
                if(isset($_SESSION['message'])){
                    echo $_SESSION['message'];
                 };
                session_unset();
           ?>
        </p>
    </div>

    <script src="script.js"></script>
    <script src="verifyLogin.js"></script>
    <script src="verifyRegister.js"></script>
</body>
</html>

<!-- 

 -->