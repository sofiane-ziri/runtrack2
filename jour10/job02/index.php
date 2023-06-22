<?php
// Informations de connexion à la base de données
$serveur = 'localhost';
$utilisateur = 'root';
$motDePasse = 'Gabrieldyna@1';
$baseDeDonnees = 'jour09';

// Connexion à la base de données avec PDO
try {
    $pdo = new PDO("mysql:host=$serveur;dbname=$baseDeDonnees", $utilisateur, $motDePasse);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Requête SQL pour récupérer le nom et la capacité de chaque salle
$sql = "SELECT nom, capacite FROM salles";

// Exécution de la requête
try {
    $stmt = $pdo->query($sql);
    $resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erreur lors de l'exécution de la requête : " . $e->getMessage());
}

// Affichage des résultats dans un tableau HTML
echo '<table>';
echo '<tr><th>Nom</th><th>Capacité</th></tr>';

foreach ($resultats as $resultat) {
    echo '<tr>';
    echo '<td>' . $resultat['nom'] . '</td>';
    echo '<td>' . $resultat['capacite'] . '</td>';
    echo '</tr>';
}

echo '</table>';
?>
