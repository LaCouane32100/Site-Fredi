<div id="login">
<form method="POST" action="index.php?uc=gererLogin&action=connexion">
    <h1 style="padding-left: 30%"> Connexion </h1>
    <fieldset>
            <p>
                <label for="mail">Adresse Mail*</label>
                <input id="mail" type="text" name="mail" size="30" maxlength="45" required>
            </p>

            <p>
                <label for="mdp">Mot de passe*</label>
                <input id="mdp" type="password" name="mdp" size="30" maxlength="45" required>
            </p>

            <p>
                <input type="submit" value="Se Connecter" name="login">
            </p>

           <a href="index.php?uc=gererLogin&action=mdpOublie"> <button  type="button"> Mot de passe oublié </button></a>

    </fieldset>
</form>
</div>
