<?php

ob_start();

session_start();
//session_destroy();

defined("DB_HOST") ? null : define("DB_HOST", "localhost");
defined("DB_USER") ? null : define("DB_USER", "newuser");
defined("DB_PASS") ? null : define("DB_PASS", "password");
defined("DB_NAME") ? null : define("DB_NAME", "ecom_db_test");

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);


//require_once("../resourses/functions.php");

?>
