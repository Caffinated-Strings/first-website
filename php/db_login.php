<?php

$host = 'localhost';
$dbname = 'max_handyman_db';
$username = 'root';
$password = 'password';
$charset = 'utf8mb4';

$conn = "mysql:host=$host;dbname=$dbname;charset=$charset";

$opts = [
    PDO::ATTR_ERRMODE               =>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE    =>PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES      =>false
];

?>