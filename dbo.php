<?php

$host = '127.0.0.1:3307';
$db = 'users';
$user = 'root';
$pass = 'darjan1234';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    }
    catch(PDOException $pe) {
     die("Could not establish connection ".$pe->getMessage());
    }

?>