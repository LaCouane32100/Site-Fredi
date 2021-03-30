<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php
		$pdo = PdoFredi::getPdoFredi();
		$ligne = $pdo->afficheBordereau();
		?>
		<form action="index.php?uc=gestionBordereau&action=ajouterLigne" method="post" style="margin-left: 50%">
			<label> Date </label> <input type="date" name="date" value="" size="35"></br>
			<label> Motif </label> <input type="text" name="motif" value="" size="35"></br>
			<label> Trajet </label> <input type="text" name="trajet" value="" size="35"></br>
			<label> KM </label> <input type="text" name="km" value="" size="35"></br>
			<label> Péage </label> <input type="text" name="peage" value="" size="35"></br>
			<label> Repas </label> <input type="text" name="repas" value="" size="35"></br>
			<label> Hébergement </label> <input type="text" name="hebergement" value="" size="35"></br>
			<input type="submit" name="valider" value="Valider" style="margin-left: 10%;margin-bottom: 10%">
		</form>
	</body>
</html>