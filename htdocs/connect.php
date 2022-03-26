<?php
$servername = "sql205.hostronavt.ru";
$username = "onavt_28931418";
$password = "54321";
$database = "onavt_28931418_file";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
$conn->set_charset("utf8");

// Check connection
if ($conn->connect_error) {
  die("Ошибка подключения: " . $conn->connect_error);
}
