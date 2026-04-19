<?php
include("config/db.php");

$data = json_decode(file_get_contents("php://input"), true);
$json = $conn->real_escape_string($data['data']);

$sql = "INSERT INTO layouts (data) VALUES ('$json')";

if ($conn->query($sql) === TRUE) {
    echo "Saved";
} else {
    echo "Error";
}
?>