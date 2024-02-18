<?php
$host = 'localhost';
$dbname = 'my_database';
$username = 'root';
$password = '';

$pdo = new PDO('mysql:host=localhost;dbname=my_database', 'root','' );
$statement = $pdo->prepare('SELECT * from workers');
$statement->execute();
$workers=$statement->fetchAll(PDO::FETCH_ASSOC);

