<?php
// Démarrer la session
session_start();

// Vérifier si le formulaire a été soumis
if (isset($_POST['prenom'])) {
    // Récupérer le prénom du formulaire
    $prenom = $_POST['prenom'];

    // Ajouter le prénom à la variable de session
    $_SESSION['prenoms'][] = $prenom;
}

// Réinitialiser la liste des prénoms si le bouton "reset" a été cliqué
if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = array();
}

// Afficher tous les prénoms enregistrés
if (isset($_SESSION['prenoms']) && !empty($_SESSION['prenoms'])) {
    echo "Prénoms enregistrés :<br>";
    foreach ($_SESSION['prenoms'] as $prenom) {
        echo $prenom . "<br>";
    }
} else {
    echo "Aucun prénom enregistré.";
}
?>

<!-- Formulaire HTML -->
<form method="POST" action="">
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" required>
    <button type="submit">Ajouter</button>
    <button type="submit" name="reset">Réinitialiser</button>
</form>
