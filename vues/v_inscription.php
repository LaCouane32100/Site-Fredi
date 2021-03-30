<div id="inscription" style="margin-left: 40%">
  <form action="index.php?uc=gererLogin&action=inscription" method="post" style="padding-left: 10%;padding-right: 50%">
    <h1 style="padding-left: 30%"> Formulaire d'inscription </h1>
    <fieldset>
      <p>
    		<label for="mail">Email</label>
    		<input type="email" id="mail" name="mail" size="30" maxlength="45" required>
      </p>

      <p>
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" size="15" maxlength="20"required>
      </p>

      <p>
    		<label for="prenom">Prenom</label>
    	  <input type="text" id="prenom" name="prenom" size="15" maxlength="20" required>

      <p>
        <label for="rue">Rue </label>
        <input type="text" id="rue" name="rue" size="30" maxlength="45" required>
      </p>

      <p>
        <label for="cp">Code Postal </label>
        <input type="text" id="cp" name="cp" size="5" maxlength="5" required>
      </p>

      <p>
        <label for="ville">Ville </label>
        <input type="text" id="ville" name="ville" size="15" maxlength="25" required>
      </p>

      <p>
        <label for="mdp">Mot de passe </label>
        <input type="text" id="mdp" name="mdp" size="15" maxlength="20" required>
      </p>

      <p>
        <label for="infoPers">Information personnelle </label>
        <input type="text" id="infoPers" name="infoPers" size="15" maxlength="20" required>
      </p>

      <p>
        <input type="submit" value="Valider" name="valider">
      </p>
    </fieldset>
  </form>
</div>