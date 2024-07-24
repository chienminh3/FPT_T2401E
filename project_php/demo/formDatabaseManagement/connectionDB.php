<?php
    $host = "mysql:host=localhost:3306;dbname=demo";
    $username = "root";
    $password = "";
    try {
        $pdo = new PDO($host, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connection successfull!";
    } catch (PDOException $e) {
        echo "connection filed error: ".$e->getMessage();
    }

?>