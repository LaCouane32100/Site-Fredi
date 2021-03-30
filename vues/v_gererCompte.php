<div id="compte">
	<form action="index.php?uc=gererCompte&action=modifierCompte" method="post">
		<h1 style="padding-left: 40%"> Modifier les informations de votre compte </h1>
		<fieldset style="margin-left: 40%;margin-right: 30%">
	    	<p>
	    		<label for="mail">Email</label>
	    		<input type="email" id="mail" name="mail" value="<?php if($_SESSION['connexion']==true){echo$_SESSION['mail'];}?>" size="30" maxlength="45" required>
	      	</p>

	      	<p>
	        	<label for="nom">Nom</label>
	        	<input type="text" id="nom" name="nom" value="<?php if($_SESSION['connexion']==true){echo$_SESSION['nom'];}?>" size="15" maxlength="20" required>
	      	</p>

	      	<p>
	    		<label for="prenom">Prenom</label>
	    	  	<input type="text" id="prenom" name="prenom" value="<?php if($_SESSION['connexion']==true){echo$_SESSION['prenom'];}?>" size="15" maxlength="20" required>

	      	<p>
	        	<label for="rue">Rue </label>
	        	<input type="text" id="rue" name="rue" value="<?php if($_SESSION['connexion']==true){echo$_SESSION['rue'];}?>" size="30" maxlength="45" required>
	      	</p>

		     <p>
		        <label for="cp">Code Postal </label>
		        <input type="text" id="cp" name="cp" value="<?php if($_SESSION['connexion']==true){echo$_SESSION['cp'];}?>" size="5" maxlength="5" required>
		    </p>

		    <p>
		        <label for="ville">Ville </label>
		        <input type="text" id="ville" name="ville" value="<?php if($_SESSION['connexion']==true){echo$_SESSION['ville'];}?>" size="15" maxlength="25" required>
		    </p>

		    <p>
		    	<label for="mdp">Mot de passe </label>
		        <input type="text" id="mdp" name="mdp" value="<?php if($_SESSION['connexion']==true){echo$_SESSION['mdp'];}?>" size="15" maxlength="20" required>
		    </p>

		    <p>
				<input type="submit" value="Modifier le compte" name="modifier">
			</p>
	    </fieldset>
	</form>
</div>