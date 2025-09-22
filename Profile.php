<?php
session_start();
include 'config.php';

if (!isset($_SESSION['utilisateur_id']))
{
    header('Location: Login.php');
    exit();
}
$stmt = $pdo->prepare("SELECT * FROM utilisateus WHERE id = ?");
$stmt->execute([$_SESSION['utilisateur_id']]);
$utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/style.css">
        <title>Profil</title>
    </head>
    <body>
        <h1>Bonjour, <?php echo htmlspecialchars($utilisateur['nom']); ?></h1>
        <p>Email: <?php echo htmlspecialchars($utilisateur['email']); ?></p>
        <a href="logout.php">Se déconnecter</a>
    </body>
</html>