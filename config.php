<?php
$host = 'localhost';
$db = 'votre_base_de_donnees';
$user = 'root';
$pass = '';
try{
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connexion réussie!";
} catch (PDOException $e) {
    echo "Erreur de connexion :" .
    $e->getMessage();
    exit;
}
?>