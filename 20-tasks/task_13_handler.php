<?php
session_start();

$host = 'localhost';
$dbname = 'my_database';
$username = 'root';
$password = '';

$text = $_POST['text'];

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$sql = "INSERT INTO test (text) VALUES (:text)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    'text' => $text,
]);
$_SESSION['message'] = $text;


header("Location: /task_13.php");