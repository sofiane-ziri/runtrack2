

<form action="" method="get">
    <label for="input1">Prenom :</label>
    <input type="text" name="input1"><br>
    <label for="input2">Nom :</label>
    <input type="text" name="input2"><br>
    <label for="input3">Age :</label>
    <input type="number" name="input3" min="10" max="100"><br>
    <input type="submit" value="Envoyer">
</form>
<?php
if(isset($_GET['input1']) && isset($_GET['input2']) && isset($_GET['input3'])) {
    $input1 = $_GET['input1'];
    $input2 = $_GET['input2'];
    $input3 = $_GET['input3'];
    echo "Prenom : $input1 <br>";
    echo "Nom : $input2 <br>";
    echo "Age : $input3 <br>";
}
?>