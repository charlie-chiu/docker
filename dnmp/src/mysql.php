<?php
//$link = mysqli_connect("10.10.10.1:3306", "root", "qwe123", "db");
$link = mysqli_connect("10.10.10.1:3306", "root", "qwe123", "mysql");
//$link = mysqli_connect("10.10.10.1", "root", "qwe123", "db", "3306");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL . "</br>";
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL. "</br>";
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL. "</br>";
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL. "</br>";
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);