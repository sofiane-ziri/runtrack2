<form method="GET" action="">
  <label for="nombre">Entrez un nombre :</label>
  <input type="text" id="nombre" name="nombre">
  <button type="submit">Valider</button>
</form>
<?php
if (isset($_GET['nombre'])) {
  $nombre = $_GET['nombre'];
  if (is_numeric($nombre)) {
    if ($nombre % 2 == 0) {
      echo "Nombre pair";
    } else {
      echo "Nombre impair";
    }
  } else {
    echo "Veuillez entrer un nombre valide";
  }
}
?>
