<?php
include("config/db.php");

$result = $conn->query("SELECT data FROM layouts ORDER BY id DESC LIMIT 1");

$row = $result->fetch_assoc();

echo $row['data'];
?>