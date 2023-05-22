<?php
function calcule($nombre1, $operation, $nombre2) {
    switch ($operation) {
        case '+':
            return $nombre1 + $nombre2;
        case '-':
            return $nombre1 - $nombre2;
        case '*':
            return $nombre1 * $nombre2;
        case '/':
            return $nombre1 / $nombre2;
        case '%':
            return $nombre1 % $nombre2;
        default:
            return "Opération invalide";
    }
}

echo calcule(5, '+', 5);
?>
