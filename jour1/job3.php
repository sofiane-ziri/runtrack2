<?php
// Définition des variables
$var_bool = true;
$var_int = 42;
$var_str = "Bonjour le monde";
$var_float = 3.14;

// Tableau des variables et de leurs informations
$vars = array(
    array("type" => "bool", "nom" => "var_bool", "valeur" => $var_bool),
    array("type" => "int", "nom" => "var_int", "valeur" => $var_int),
    array("type" => "string", "nom" => "var_str", "valeur" => $var_str),
    array("type" => "float", "nom" => "var_float", "valeur" => $var_float)
);

// Génération du tableau HTML
echo "<table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>";
foreach ($vars as $var) {
    echo "<tr>
            <td>{$var['type']}</td>
            <td>{$var['nom']}</td>
            <td>{$var['valeur']}</td>
        </tr>";
}
echo "</tbody></table>";
?>
