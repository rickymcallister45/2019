<?php

$dbServername ="localhost";
$dbUsername = "newuser";
$dbPassword = "password";
$dbName = "toDo";

$db = @new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);
/*
if($db->connect_error){
  echo $db->connect_error;
}

echo "Connection Successful";
*/
?>