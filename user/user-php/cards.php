<?php

require '../../dbo.php';

$data = $conn->query('SELECT * FROM jobs')->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($data);


?>