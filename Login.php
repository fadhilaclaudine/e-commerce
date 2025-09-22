<?php include 'config.php'; ?>
<DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/style.css">
        <title>Connexion</title>
    </head>
    <body>
        <h1>Connexion</h1>
        <form action="Processus_connexion.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="mot_de_passe" placeholder="mot de passe" required>
            <input type="submit" value="Se connecter">
        </form>
    </body>
</html>