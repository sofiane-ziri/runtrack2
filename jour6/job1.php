
<form method="post">
    <button type="submit" name="reset">Réinitialiser</button>
</form>
<?php
session_start(); // Initialise une session
if (!isset($_SESSION['nbvisites'])) { // Vérifie si nbvisites n'existe pas dans la session
    $_SESSION['nbvisites'] = 0; // Initialise nbvisites à 0
}
$_SESSION['nbvisites']++; // Incrémente le compteur à chaque visite
echo "Nombre de visites : ".$_SESSION['nbvisites']; // Affiche le nombre de visites

if (isset($_POST['reset'])) { // Vérifie si le bouton de réinitialisation a été cliqué
    unset($_SESSION['nbvisites']); // Supprime la variable nbvisites de la session
    header('Location: job1.php'); // Redirige vers la même page pour rafraîchir la session
}
?>

