<?php

$host = 'localhost';
$dbname = 'my_database';
$username = 'root';
$password = '';

$text = $_POST['text'];

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$sql = "INSERT INTO test (text) VALUES (:text)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    'text' => $text
]);

header("Location: /task_10.php");