<?php
for ($n = 2; $n <= 1000; $n++) {
    $est_premier = true;
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            $est_premier = false;
            break;
        }
    }
    if ($est_premier) {
        echo $n . "<br />";
    }
}
?>
