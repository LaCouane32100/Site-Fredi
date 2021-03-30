<meta charset="utf-8" />
<?php
//Controleur Principal du site Fredi
session_start();
//require_once("util/fonctions.inc.php");
require_once("util/class.pdoFredi.inc.php");
include("vues/v_entete.php") ;
include("vues/v_choix.php");
include("vues/v_bandeau.php") ;

if(!isset($_REQUEST['uc']))
     $uc = 'accueil';
else
	$uc = $_REQUEST['uc'];

if(!isset($_SESSION['connexion']))
	$_SESSION['connexion'] = false;


/* Création d'une instance d'accès à la base de données */
$pdo = PdoFredi::getPdoFredi();	 


switch($uc)
{
	case 'accueil':
	{include("vues/v_accueil.php");break;}

	case 'gererLogin':
	{include("controleurs/c_login_inscription.php");break;}

	case 'gererCompte':
	{include("controleurs/c_GestionCompte.php");break;}

	case 'gestionBordereau' :
	{include("controleurs/c_gestionAdherent.php");break;}
}

include("vues/v_pied.php") ;
?>

