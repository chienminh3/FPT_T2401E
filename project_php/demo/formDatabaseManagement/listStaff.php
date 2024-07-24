<?php
require "connectionDB.php";
require "Staff.php";

try {
    $sql = "select * from staff";
    $sttm = $pdo->prepare($sql);
    $sttm->execute();
    $sttm->setFetchMode(PDO::FETCH_CLASS, "Staff");
    $staff = $sttm->fetchAll();
    echo "<br>";
    print_r($staff);
} catch (PDOException $e) {
    echo "get staff error " . $e->getMessage();
}
