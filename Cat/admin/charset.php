<?php
include '../config/db.php';
header('Content-Type: text/html; charset=utf-8');  // ตั้งค่า charset ให้เป็น UTF-8

$sql = "SELECT * FROM CatBreeds";
$result = $conn->query($sql);
?>
