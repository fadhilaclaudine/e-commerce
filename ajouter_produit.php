<?php include 'config.php'; ?>
<DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/style.css">
        <title>Ajouter un produit</title>
    </head>
    <body>
        <h1>Ajouter un produit</h1>
        <form action="Processus_ajout.php"method="POST" enctype="multipart/form-data">
            <input type="text" name="nom" placeholder="nom du produit" required>
            <input type="number" name="prix" placeholder="prix" required> 
            <input type="file" name="image" accept="image/*" required>
            <input type="submit" value="ajouter le produit">
        </form>
    </body>

</html>