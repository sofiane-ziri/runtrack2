<?php
function bonjour($jour) {
    if ($jour) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

// Exemples d'appels de la fonction bonjour()
bonjour(true); // Affiche "Bonjour"
bonjour(false); // Affiche "Bonsoir"
?>
