<?php
// Paramètres de connexion à la base de données
$serveur = 'localhost';
$utilisateur = 'root';
$motDePasse = 'Gabrieldyna@1';
$baseDeDonnees = 'jour09';

try {
    // Connexion à la base de données
    $connexion = new PDO("mysql:host=$serveur;dbname=$baseDeDonnees;charset=utf8", $utilisateur, $motDePasse);

    // Requête SQL pour récupérer les informations de la table étudiants
    $requete = "SELECT * FROM etudiants";
    $resultat = $connexion->query($requete);

    // Affichage du résultat dans un tableau HTML
    echo '<table>';
    echo '<thead><tr>';
    
    // Affichage des noms de champs
    for ($i = 0; $i < $resultat->columnCount(); $i++) {
        $nomChamp = $resultat->getColumnMeta($i)['name'];
        echo '<th>' . $nomChamp . '</th>';
    }
    
    echo '</tr></thead>';
    echo '<tbody>';

    // Affichage des données
    while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>';
        foreach ($ligne as $valeur) {
            echo '<td>' . $valeur . '</td>';
        }
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';

} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}
?>
