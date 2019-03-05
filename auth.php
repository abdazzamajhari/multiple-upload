<?php

session_start();
if(!isset($_SESSION["user"]))header("Location: login.php");

    $conn = new mysqli("localhost", "root", "", "db_users");
        if ($conn->connect_errno) {
            echo "Failed to connect to MySQL: " . $conn->connect_error;
        }