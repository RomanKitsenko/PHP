<?php
session_start();

$host = 'localhost';
$dbname = 'my_database';
$username = 'root';
$password = '';

$email = $_POST['email'];
$pass = $_POST['password'];

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$hashed_password = password_hash($pass, PASSWORD_DEFAULT);


$sql = "SELECT * FROM task_12 WHERE email = :email";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    'email' => $email,
]);
$user= $stmt->fetch(PDO::FETCH_ASSOC);
$pass_is_correct = password_verify($pass, $user['password']);
if ($pass_is_correct){
    $_SESSION['success'] = "Добро пожаловать";
    $_SESSION['user'] = $email;
    header("Location: /task_15.php");
    exit();
} else {
    $_SESSION['wrong'] = "Неверный логин или пароль";
    header("Location: /task_15.php");
    exit();
}

