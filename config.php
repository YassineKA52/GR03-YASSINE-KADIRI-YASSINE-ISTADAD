<?php

session_start();

function pasConnecter()
{
    if (!isset($_SESSION['user_id'])) {
        header('Location: login.php');
        exit;
    }
}

$host = 'db';
$db   = 'mydatabase';
$user = 'user';
$pass = 'password';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
PDO::ATTR_ERRMODE            
=> PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    } catch (\PDOException $e) {
    die("Erreur de connexion à la base de données: ".$e->getMessage());
    }


function recupererEntraineur() {
    global $pdo;
    $sql = "SELECT id, name FROM coaches ORDER BY name ASC";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function recupererNiveaux() {
    global $pdo;
    $sql = "SELECT id, name FROM levels ORDER BY name ASC";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function recupererLieux() {
    global $pdo;
    $sql = "SELECT id, name FROM locations ORDER BY name ASC";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>
