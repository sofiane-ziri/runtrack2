<?php
// Paramètres de connexion à la base de données
$serveur = 'localhost';
$utilisateur = 'root';
$motDePasse = 'Gabrieldyna@1';
$baseDeDonnees = 'jour09';

try {
    // Connexion à la base de données avec PDO
    $conn = new PDO("mysql:host=$serveur;dbname=$baseDeDonnees", $utilisateur, $motDePasse);
    // Configuration des options PDO pour afficher les erreurs
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Requête SQL pour récupérer les informations des étudiantes de sexe féminin
    $sql = "SELECT prenom, nom, naissance FROM etudiants WHERE sexe = 'F'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    // Affichage du tableau HTML avec les résultats de la requête
    echo "<table>";
    echo "<tr><th>Prénom</th><th>Nom</th><th>Date de naissance</th></tr>";
    
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>".$row['prenom']."</td>";
        echo "<td>".$row['nom']."</td>";
        echo "<td>".$row['naissance']."</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}

// Fermeture de la connexion à la base de données
$conn = null;
?>
