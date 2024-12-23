<?php

require 'functions.php';

$dsn = "mysql:host=localhost;port=3306;dbname=;charset=utf8mb4";

$pdo = new PDO($dsn, '', '');

$statement = $pdo->prepare("select * from social_media");

$statement->execute();

$socialMedias = $statement->fetchAll(PDO::FETCH_ASSOC);

// var_dump($events);

foreach ($socialMedias as $socialMedia) {
    echo "<li>" . $socialMedia['name'] . "</li>";
}

dd("my variable");