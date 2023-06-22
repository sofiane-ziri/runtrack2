<?php
function calcule($nombre1, $operateur, $nombre2) {
    switch ($operateur) {
        case '+':
            return $nombre1 + $nombre2;
        case '-':
            return $nombre1 - $nombre2;
        case '*':
            return $nombre1 * $nombre2;
        case '/':
            if ($nombre2 != 0) {
                return $nombre1 / $nombre2;
            } else {
                return "Erreur : division par zéro";
            }
        case '%':
            return $nombre1 % $nombre2;
        default:
            return "Erreur : opérateur non valide";
    }
}

// Exemple d'appel de la fonction calcule()
$resultat = calcule(10, '+', 5);
echo $resultat; // Affiche 15

$resultat = calcule(8, '/', 2);
echo $resultat; // Affiche 4

$resultat = calcule(7, '$', 3);
echo $resultat; // Affiche "Erreur : opérateur non valide"
?>
