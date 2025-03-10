<?php
$username = "root";
$mdp = "";
$dbname = "blog_simplon";
$dsn = "mysql:dbname=$dbname;host=127.0.0.1;port=3307;charset=utf8";

try {
    $pdo = new PDO($dsn, $username, $mdp);
    $pdo->setAttribute(
        PDO::ATTR_DEFAULT_FETCH_MODE,
        PDO::FETCH_ASSOC
    );
    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
