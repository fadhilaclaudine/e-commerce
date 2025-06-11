<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vêtements en ligne</title>
        <link rel="stylesheet" href="style/style.css">
    </head>
    <body>
        <header>
            <h1>bienvenue sur notre boutique de Vêtements en ligne</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="Page/Produit.php">Produits</a></li>
                    <li><a href="Pages/Panier.php">Panier</a></li>
                    <li><a href="Pages/Compte.php">Mon compte</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <section class="t-shirts">
                <img src="images/t-shirts.jpg" alt="promotion speciale">
            </section>
            <section class="Produits">
                <h2>Produits en vedette</h2>
                <div class="Produit">
                    <img src="images/Produit1.jpg" alt="Produit 1">
                    <h3>nom du Produit</h3>
                    <p>Prix: 30,99 $</p>
                    <button>Ajouter au panier</button>
                </div>

            </section>
            <section class="newsletter">
                <h2>Inscrivez-vous à notre newsletter</h2>
                <form>
                    <input type="email" placeholder="Votre email" required>
                    <button type="submit">S'inscrire</button>
                </form>
            </section>
        </main>
        <footer>
            <p>&copy; 2025 Boutique de Vêtements</p>
        </footer>
        
        <nav>
            <ul>
                <li><a href="#">A propos</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="reseaux-sociaux">
            <a href="#">Facebook</a><br>
            <a href="#">Instagram</a><br>
        </div>
        
    </body>
    
</html>