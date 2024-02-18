<?php

$host = 'localhost';
$dbname = 'my_database';
$username = 'root';
$password = '';

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$images = $_FILES['image'];
function upload_file($filename, $tmp_name, $pdo) {
    $image_info = pathinfo($filename);
    $image_extension = $image_info['extension'];
    $image_filename = uniqid() . '.' . $image_extension;

    move_uploaded_file($tmp_name, "upload/$image_filename");

    $sql = "INSERT INTO task_17 (src) VALUE (:src)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'src' => $image_filename
    ]);
}

for($i=0;$i < count($images['name']); $i++ ){
    upload_file($images['name'][$i], $images['tmp_name'][$i], $pdo);
}

header("Location: /task_19.php");