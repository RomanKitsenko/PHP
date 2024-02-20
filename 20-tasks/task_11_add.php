<?php
session_start();

$host = 'localhost';
$dbname = 'my_database';
$username = 'root';
$password = '';

$text = $_POST['text'];

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$sql = "SELECT * FROM test WHERE text=:text";
$stmt = $pdo->prepare($sql);
$stmt->execute([ 'text' => $text]);
$text_value = $stmt->fetch(PDO::FETCH_ASSOC);

if(!empty($text_value)) {
    $_SESSION['text'] = $text_value;
    header("Location: /task_11.php");
    exit();
}

$sql = "INSERT INTO test (text) VALUES (:text)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    'text' => $text
]);

header("Location: /task_11.php");
exit();