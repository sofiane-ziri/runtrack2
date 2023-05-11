<?php
$str = "Les choses que l'on possède finissent par nous posséder.";

// On calcule la longueur de la chaîne $str
$length = strlen($str);

// On boucle de la fin à la début de la chaîne $str
for ($i = $length - 1; $i >= 0; $i--) {
    // On affiche le caractère courant
    echo $str[$i];
}
?>
