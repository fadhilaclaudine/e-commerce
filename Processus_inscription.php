<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_BCRYPT);
    $stmt = $pdo->prepare("INSERT INTO utilisateurs (nom, email, mot_de_passe) VALUES (?, ?, ?)");

    if ($stmt->execute([$nom, $email, $mot_de_passe])) {
        healder('Location: Login.php');
    } else {
        echo "Erreur lors de l'inscription";
    }
}
?>