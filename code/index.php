<?php

$env = parse_ini_file('.env');

$dbname = $env['DB_NAME'];
$user = $env['DB_USER'];
$pass = $env['DB_PASSWORD'];

try {
    // host=db - потому что контейнер с бд называется "db"
    $dbh = new PDO("mysql:host=db;dbname=$dbname", $user, $pass);
    echo 'succeeded in connecting to the database' . '<br>';
} catch (PDOException $e) {
    echo 'failed to connect to the database' . '<br>';
    echo '<pre>';
    var_dump($e);
    echo '</pre>';
}

?>

<h1>Добро пожаловать!</h1>
