<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./admin-home-style.css">
    <title>Admin Homepage</title>
</head>
<body>
    <h1 id="welcome">Welcome  <span id="logged-username"><?php echo $_SESSION['username']; ?></span></h1>
    
</body>
</html>