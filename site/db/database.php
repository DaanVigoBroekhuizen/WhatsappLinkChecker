<?php

$server = "127.0.0.1";
$username = "root";
$password = "";
$db = "whatsapp";

try {
    $conn = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die($e->getMessage());
}
