<?php
$username = 'root';
$password = '';
try {
    $conn = new PDO('mysql:host=localhost;dbname=viagem', $username, $password);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>