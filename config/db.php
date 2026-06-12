<?php
// config/db.php

$host = 'localhost';
$db_name = 'sims_db';
$username = 'root';
$password = ''; // Kama una password ya mysql weka hapa, la sivyo acha wazi

try {
    // Kutumia PDO (Njia salama na ya kisasa zaidi kwa Computer Science)
    $conn = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
    
    // Set error mode kuwa Exceptions
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
} catch(PDOException $e) {
    // Ikifeli ku-connect ionyeshe error
    die("Database Connection Failed: " . $e->getMessage());
}
?>