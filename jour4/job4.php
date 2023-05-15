

<form action="" method="post">
    <label for="input1">Prenom :</label>
    <input type="text" name="Prenom"><br>
    <label for="input2">Nom :</label>
    <input type="text" name="Nom"><br>
    <label for="input3">Age :</label>
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
			foreach ($_POST as $key => $value) {
				echo "<tr><td>$key</td><td>$value</td></tr>";
			}
			?>
		</tbody>
	</table>
</body>
</html>
