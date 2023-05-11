<?php
// Définition de la chaîne
$str = "I'm sorry Dave I'm afraid I can't do that";

// Parcours de la chaîne
for ($i = 0; $i < strlen($str); $i++) {
    $char = strtolower($str[$i]);
    if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u') {
        echo $str[$i];
    }
}
?>
