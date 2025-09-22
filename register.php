<?php include 'config.php'; ?>
<DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/style.css">
        <title>Inscription</title>
    </head>
    <body>
        <h1>Créer un Compte</h1>
        <form action="Processus_inscription.php" method="POST">
            <input type="text" name="nom" placeholder="nom" required>
            <input type="Email" name="email" placeholder="Email" required>
            <input type="password" name="mot_de_passe" placeholder="mot de passe" required>
            <input type="submit" value="S'inscrire">
        </form>
    </body>
</html>