<?php

$host = 'localhost';
$dbname = 'my_database';
$username = 'root';
$password = '';

$image_id = $_GET['id'];

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$sql = "SELECT * FROM task_17 WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    'id' => $_GET['id']
]);
$image = $stmt->fetch(PDO::FETCH_ASSOC);

$image_src = $image['src'];
$image_path = "upload/$image_src";

if (file_exists("$image_path")) {
    unlink("$image_path");
}

$sql = "DELETE FROM task_17 WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    'id' => $image_id
]);

header("Location: /task_18.php");
exit();


