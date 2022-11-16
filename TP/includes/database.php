<?php
$username = 'root';
$password = 'root';
$database = new PDO('mysql:host=localhost;dbname=tp', $username, $password, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
