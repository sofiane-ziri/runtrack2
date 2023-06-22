<?php
function leetSpeak($str) {
    $leetTable = array(
        'A' => '4',
        'a' => '4',
        'B' => '8',
        'b' => '8',
        'E' => '3',
        'e' => '3',
        'G' => '6',
        'g' => '6',
        'L' => '1',
        'l' => '1',
        'S' => '5',
        's' => '5',
        'T' => '7',
        't' => '7'
    );

    $result = '';
    $length = strlen($str);
    
    for ($i = 0; $i < $length; $i++) {
        $char = $str[$i];
        
        if (isset($leetTable[$char])) {
            $result .= $leetTable[$char];
        } else {
            $result .= $char;
        }
    }
    
    return $result;
}

// Exemple d'appel de la fonction leetSpeak()
$str = "Hello World";
$resultat = leetSpeak($str);
echo $resultat; // Affiche "H3110 W0r1d"
?>
