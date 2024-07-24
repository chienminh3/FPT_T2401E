<?php
session_start();
require_once "app/config/DB.php";
$conn = DBConnection::getConnection();
require_once "app/middelware/AuthMiddelware.php";
require_once "app/controllers/BaseController.php";
require_once "app/App.php";
// action nao can authen thi de vao middelware vd: execute la mot action can authen
$middelware = new AuthMiddelware(["admin/index"]);
$app = new App($conn, $middelware);

?>