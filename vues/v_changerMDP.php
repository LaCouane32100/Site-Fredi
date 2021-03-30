<div id="container">
	<h1 style="margin-left: 40%"> Créez un nouveau mot de passe </h1>
	<form method="POST" style="margin-left: 40%" action="index.php?uc=gererLogin&action=changer">
		<fieldset style="margin-right: 40%">

			<p>
				<label><b>E-mail</b></label>
				<input type="text" placeholder="Entrez l'adresse mail" name="mail" required>
			</p>
			
			<p>
				<label><b>Mot de passe</b></label>
				<input type="text" placeholder="Entrez votre nouveau mot de passe" name="mdp" required>
			</p>


		<input type="submit" name="valider" value="Valider">
</fieldset>
	</form>
</div>