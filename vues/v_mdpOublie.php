<div id="container">
	<h1 style="margin-left: 48%"> Information nécessaires </h1>
	<form method="POST" style="margin-left: 40%" action="index.php?uc=gererLogin&action=verifInfo">
		<fieldset style="margin-right: 40%">
			<p>
				<label><b>E-mail</b></label>
				<input type="text" placeholder="Entrez l'adresse mail" name="mail" required>
			</p>

			<p>
				<label><b>Saisissez votre information personelle</b></label>
				<input type="text" placeholder="Entrez votre information personnelle" name="infoPers" size="31" required>
			</p>

				<input type="submit" name="valider" value="Valider">
		</fieldset>
	</form>
</div>