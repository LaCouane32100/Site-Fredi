<!-- Controleur pour s'inscrire et/ou se connecter sur FREDI -->
<?php

$action = $_REQUEST['action'];

switch ($action) 
{
	case 'form_connexion':
	{
		if($_SESSION['connexion']==true)
		{
			$ligne = $pdo->afficheBordereau();
			include ("vues/v_tableau.php");
		}
		else
		{
			include("vues/v_connexion.php");
		}
		break;
	}

	case 'connexion' :
	{
		$mail=$_POST['mail'];
		$mdp=$_POST['mdp'];
		$pdo -> login($mail,$mdp);
		break;
	}

	case 'form_inscription' :
	{
		include("vues/v_inscription.php");
		break;
	}

	case 'inscription':
	{
		$mail = $_POST["mail"];
		$nom = $_POST["nom"];
		$prenom = $_POST["prenom"];
		$rue = $_POST["rue"];
		$cp = $_POST["cp"];
		$ville = $_POST["ville"];
		$mdp = $_POST["mdp"];
		$infoPers = $_POST["infoPers"];
		
		$pdo->enregistrer($mail,$nom,$prenom,$rue,$cp,$ville,$mdp,$infoPers);
		break;
	}
	
	case 'mdpOublie' :
	{
		include("vues/v_mdpOublie.php");
		break;
	}

	case 'changer' :
	{
		$mail = $_POST['mail'];
		$mdp = $_POST['mdp'];
		$pdo->creationNouveauMdp($mail,$mdp);
		break;
	}

	case 'deconnexion' :
	{
		session_destroy();
		$_SESSION['connexion']=false;
		include("vues/v_connexion.php");
		break;
	}

	case 'verifInfo' :
	{
		$mail = $_POST['mail'];
		$infoPers = $_POST['infoPers'];
		$pdo -> verifInfoPers($mail,$infoPers);
		break;
	}
}
?>