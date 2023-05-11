<?php
// Définition de la chaîne
$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";

// Initialisation du dictionnaire
$dic = array(
    'consonnes' => 0,
    'voyelles' => 0
);

// Parcours de la chaîne pour compter les consonnes et les voyelles
for ($i = 0; $i < strlen($str); $i++) {
    $char = strtolower($str[$i]);
    if (in_array($char, array('a', 'e', 'i', 'o', 'u', 'y'))) {
        $dic['voyelles']++;
    } elseif (ctype_alpha($char)) {
        $dic['consonnes']++;
    }
}

// Affichage du tableau HTML
echo "<table>
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{$dic['voyelles']}</td>
                <td>{$dic['consonnes']}</td>
            </tr>
        </tbody>
      </table>";
?>
