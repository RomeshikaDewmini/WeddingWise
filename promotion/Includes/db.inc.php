<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "wwise";

// Create a new mysqli instance
$connection = new mysqli($host, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: ");
}
else{
    echo"connection successful";
};

