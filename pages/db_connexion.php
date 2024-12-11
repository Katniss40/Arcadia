<?php
// test de connexion

//session_start();

$host = 'mysql-zoo-arcadia-2025.alwaysdata.net';
$db = 'zoo-arcadia-2025_zoo';
$user = '383336';
$pass =  '@Admin2025';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$option= [
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES   => false
];

try {
  $pdo = new PDO($dsn, $user, $pass, $option);
  echo "connexion réussi !  Bienvenue au zoo Arcadia.";
}
catch (\PDOException $e) {
  throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

?>