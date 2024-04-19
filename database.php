<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kolase";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "CREATE TABLE IF NOT EXISTS user(
        id INT(6) AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        username VARCHAR(50) UNIQUE NOT NULL,
        email VARCHAR(50) UNIQUE NOT NULL,
        password VARCHAR(50) NOT NULL
    )";
    $conn->query($sql);

    $sql = "CREATE TABLE IF NOT EXISTS messages(
        id INT(6) AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(50) NOT NULL,
        last_name VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
        message TEXT NOT NULL
    )";
    $conn->query($sql);
?>