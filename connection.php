<?php
$host = 'nozomi.proxy.rlwy.net';
$user = 'root';
$pass = 'BidkvecOfSssXmdZfLtdjwBwxbyCuiYP';
$db   = 'railway';
$port = 46884;

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected to Railway MySQL successfully!";
?>
