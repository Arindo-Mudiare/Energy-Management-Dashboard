<?php

$username = 'root';
$password = 'edekiedith';
$dsn = 'mysql:host=localhost;dbname=register';

try {
    $db = new PDO($dsn, $username, $password);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // display success message
    // echo "Connected to the register database";
} catch (PDOException $exn) {
    // display error message
    echo "Connection failed" . " because " . $exn->getMessage();
}
