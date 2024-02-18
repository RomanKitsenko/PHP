<?php
session_start();

$host = 'localhost';
$dbname = 'my_database';
$username = 'root';
$password = '';

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

preg_match('/(.+)?\.(.+)?$/', $_FILES['image']['name'], $output);
$file_type = $output[2];

$file_path = uniqid() . '.' . $file_type;

move_uploaded_file($_FILES['image']['tmp_name'], 'upload/' . $file_path);


$sql = "INSERT INTO task_17 (src) VALUE (:src)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':src' => $file_path
]);

header("Location: /task_17.php");



