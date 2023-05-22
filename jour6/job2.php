<?php
// Vérifie si le cookie existe déjà
if (isset($_COOKIE['nombre_visites'])) {
    $nombreVisites = $_COOKIE['nombre_visites'];
    $nombreVisites++; // Incrémente le nombre de visites
} else {
    $nombreVisites = 1; // Initialise le nombre de visites à 1
}


// Met à jour le cookie avec la nouvelle valeur
setcookie('nombre_visites', $nombreVisites); 

// Affiche le nombre de visites
echo "Nombre de visites : " . $nombreVisites;
?>
