<?php
session_start();

$host = 'localhost';
$dbname = 'my_database';
$username = 'root';
$password = '';

$email = $_POST['email'];
$pass = $_POST['password'];

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$sql = "SELECT * FROM task_12 WHERE email = :email";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    'email' => $email
]);
$email_is_set = $stmt->fetch(PDO::FETCH_ASSOC);

if (!empty($email_is_set)) {
    $_SESSION['danger'] = "Такой email существует";
} else {
    $sql = "INSERT INTO task_12 (email, password) VALUES (:email, :password)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'email' => $email,
        'password' => $pass
    ]);
    $_SESSION['success'] = "Спасибо за регистрацию";
}

header("Location: /task_12.php");