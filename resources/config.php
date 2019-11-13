<?php
//output buffering
ob_start();
session_start();
//defining paths
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . ds . "templates/back");
defined("TEMPLATE_BACK") ? null : define("TEMPLATE_FRONT" . ds . "templates/back");
// echo __DIR__

//DB Connection
defined("DB_HOST") ? null : define("DB_HOST", "localhost");
defined("DB_USER") ? null : define("DB_USER", "root");
defined("DB_PASS") ? null : define("DB_PASS", "");
defined("DB_NAME") ? null : define("DB_NAME", "ecom_db");

// //create connection and require functions
$connection = mysqli_connect("DB_HOST", "DB_USER", "DB_PASS", "DB_NAME");
require_once("functions.php");
?>