<?php
    $host = "mysql:host=localhost:3306;dbname=demo";
    $username = "root";
    $password = "";
    try {
        $pdo = new PDO($host, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connection success";

    } catch (PDOException $e) {
        echo "connect filed error: ".$e->getMessage();
    }
    // mục đích tạo ra đoạn mã trên chính là để connection database và tái sử dụng mã connection dựa vào biến $pdo.
?>