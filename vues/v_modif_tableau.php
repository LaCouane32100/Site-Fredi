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
		<form action="index.php?uc=gestionBordereau&action=modifierLigne" method="post" style="margin-left: 50%">
			<label> Date </label> <input type="date" name="date" value="<?php echo $ligne[$id][1]; ?>" size="35"></br>
			<label> Motif </label> <input type="text" name="motif" value="<?php echo $ligne[$id][2]; ?>" size="35"></br>
			<label> Trajet </label> <input type="text" name="trajet" value="<?php echo $ligne[$id][3]; ?>" size="35"></br>
			<label> KM </label> <input type="text" name="km" value="<?php echo $ligne[$id][4]; ?>" size="35"></br>
			<label> Péage </label> <input type="text" name="peage" value="<?php echo $ligne[$id][5]; ?>" size="35"></br>
			<label> Repas </label> <input type="text" name="repas" value="<?php echo $ligne[$id][6]; ?>" size="35"></br>
			<label> Hébergement </label> <input type="text" name="hebergement" value="<?php echo $ligne[$id][7]; ?>" size="35"></br>
			<input type="submit" name="" value="Sauvegarder" style="margin-left: 10%;margin-bottom: 10%">
		</form>
	</body>
</html>

