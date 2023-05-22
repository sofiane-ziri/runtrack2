<?php
// Vérifier si le formulaire a été soumis
if (isset($_POST['connexion'])) {
    // Récupérer le prénom du formulaire
    $prenom = $_POST['prenom'];

    // Stocker le prénom dans un cookie pendant 1 heure (3600 secondes)
    setcookie('prenom', $prenom, time() + 3600);
}

// Vérifier si l'utilisateur est déjà connecté (le cookie existe)
if (isset($_COOKIE['prenom'])) {
    $prenom = $_COOKIE['prenom'];
    echo "Bonjour $prenom !";
    echo '<form method="POST" action="">
            <button type="submit" name="deco">Déconnexion</button>
          </form>';
} else {
    // Afficher le formulaire de connexion
    echo '<form method="POST" action="">
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" required>
            <button type="submit" name="connexion">Connexion</button>
          </form>';
      
}

// Gérer la déconnexion
if (isset($_POST['deco'])) {
    // Supprimer le cookie en le mettant à une date passée
    setcookie('prenom', '', time() - 3600);
    // Recharger la page pour afficher à nouveau le formulaire de connexion
    header('Location:' . $_SERVER['PHP_SELF']);
    exit;
}
?>
