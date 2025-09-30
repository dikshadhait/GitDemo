<?php
$host = 'findb1.coj0oqmooxfk.us-east-1.rds.amazonaws.com';
$dbname = 'findb1';
$user = 'admin';
$pass = 'Diksha#123';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
