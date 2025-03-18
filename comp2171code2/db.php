<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "sheaz_grace_db";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

