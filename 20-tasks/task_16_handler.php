<?php
session_start();

$host = 'localhost';
$dbname = 'my_database';
$username = 'root';
$password = '';

unset($_SESSION['user']);

header("Location: /task_15.php");


