<?php

try {
    $pdo = new PDO("mysql:host=localhost:3306;dbname=v_store", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo $e->getMessage();
}

?>
