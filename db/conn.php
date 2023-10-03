<?php

    $host = $_ENV["DB_HOST"];
    $username = $_ENV["DB_USERNAME"];
    $password = $_ENV["DB_PASSWORD"];
    $name = $_ENV["DB_NAME"];

    try {
        $conn = new PDO("mysql:host=$host;dbname=$name", "$username", "$password");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        die("Error 500: The server encountered an internal error or misconfiguration and was unable to complete your request.");
    }