<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// convertir la chaîne en tableau de caractères
$chars = str_split($str);

// stocker le premier caractère pour la fin
$last_char = $chars[0];

// parcourir la chaîne en remplaçant chaque caractère par le suivant
for ($i = 0; $i < count($chars) - 1; $i++) {
    $chars[$i] = $chars[$i + 1];
}

// remplacer le dernier caractère par le premier
$chars[count($chars) - 1] = $last_char;

// convertir le tableau de caractères en chaîne
$str = implode("", $chars);

echo $str;
?>
