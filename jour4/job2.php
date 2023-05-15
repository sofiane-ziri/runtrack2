<!DOCTYPE html>
<html>
<head>
	<title>Tableau des arguments GET</title>
</head>
<body>
<form action="" method="get">
    <label for="input">Prenom :</label>
    <input type="text" name="Prenom"><br>
    <label for="input">Nom :</label>
    <input type="text" name="Nom"><br>
    <label for="input">Age :</label>
    <input type="number" name="Age" min="10" max="100"><br>
    <input type="submit" value="Envoyer">
</form>
	<table>
		<thead>
			<tr>
				<th>Argument</th>
				<th>Valeur</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($_GET as $key => $value) {
				echo "<tr><td>$key</td><td>$value</td></tr>";
			}
			?>
		</tbody>
	</table>
</body>
</html>
