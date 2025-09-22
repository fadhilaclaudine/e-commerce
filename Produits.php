<?php include 'config.php'; ?>
<DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/style.css">
        <title>Produits</title>
    </head>
    <body>
        <h1>Nos produits</h1>
        <div  class="Produits">
            <?php
            $stmt = $pdo->query("SELECT * FROM Produits");
           $Produits = $stmt->fetchALL(PDO::FETCH_ASSOC);
           foreach ($Produits as $Produit) {
            echo $Produit['nom'] . "<br>";
           } 
            ?>
        </div>
    </body>
</html>