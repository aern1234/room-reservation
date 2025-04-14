<?php
function connect_db() {
    $host = 'localhost'; // Database host
    $dbname = 'room_reservation_db';
    $username = 'root';
    $password = 'rootroot';
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("DB connection failed: " . $e->getMessage());
    }
}

