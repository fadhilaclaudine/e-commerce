<?php 
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];

    $image = $_FILES['image']['name'];
    $target = "images/" .
    basename($image);
    if (move_uploaded_file($_FILES['image']['tmp_name'] . $target ))
    {
        $stmt = $pdo->prepare("INSERT INTO Produits (nom, prix, image)  VALUES (?, ?, ?)");
        $stmt->execute([$nom, $prix, $target]);
        header('Location: Produits.php');
    } else {
        echo "Echec du téléchqrgement de l'image.";
    }
}
?>