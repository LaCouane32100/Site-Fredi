<!-- Controleur pour gérer son compte sur FREDI -->
<?php

$action = $_REQUEST['action'];

switch ($action) 
{
	case 'affichage':
	{
		include("vues/v_gererCompte.php");
		break;
	}

	case 'modifierCompte':
	{	
		$mail=$_POST['mail'];
	    $nom=$_POST['nom'];
	    $prenom=$_POST['prenom'];
	    $rue=$_POST['rue'];
	    $cp=$_POST['cp'];
	    $ville=$_POST['ville'];
    	$mdp=$_POST['mdp'];
    	$pdo->modifierCompte($mail,$nom,$prenom,$rue,$cp,$ville,$mdp);
    	$message = "Les informations du compte ont été modifiées !";
    	include("vues/v_message.php");
    	include("vues/v_accueil.php");
		break;
	}
}
?>