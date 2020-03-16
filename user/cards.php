<?php

$host = '127.0.0.1:3308';
$db = 'blog';
$user = 'root';
$pass = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    }
    catch(PDOException $pe) {
     die("Could not establish connection ".$pe->getMessage());
    }

$data = $conn->query('SELECT * FROM users')->fetchAll(PDO::FETCH_UNIQUE);

echo json_encode($data);


?>