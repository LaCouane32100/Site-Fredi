<?php
/** 
 * Classe d'accès aux données. 
 * Utilise les services de la classe PDO
 * pour l'application Fredi
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * $monPdoFredi qui contiendra l'unique instance de la classe
 *
 * @package default
 * @author slam5
 * @version    1.0

 */

class PdoFredi
{   		
      	private static $monPdo;
		private static $monPdoFredi = null;
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 **/				
	private function __construct()
	{
    		PdoFredi::$monPdo = new PDO('mysql:host=127.0.0.1;dbname=fredi', 'root',''); 
			PdoFredi::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		PdoFredi::$monPdo = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe
 *
 * Appel : $instancePdoFrais = PdoFredi::getPdoFredi();
 * @return l'unique objet de la classe PdoFredi
 */
	public  static function getPdoFredi()
	{
		if(PdoFredi::$monPdoFredi == null)
		{
			PdoFredi::$monPdoFredi= new PdoFredi();
		}
		return PdoFredi::$monPdoFredi;  
	}

	// Fonctions de Login et d'inscriptions //

	public function enregistrer($mail,$nom,$prenom,$ville,$rue,$cp,$mdp,$infoPers)
	{
		$req ="insert into demandeurs values('".$mail."','".$nom."','".$prenom."','".$rue."','".$cp."','".$ville."','".$mdp."','".$infoPers."');";
		$res = PdoFredi::$monPdo->exec($req);
		$message="Votre compte a été enregistré avec succès ! Retenez bien votre information personnelle, elle pourra vous servir en cas de MDP oublié";
		include("vues/v_message.php");
		include("vues/v_connexion.php");
	}

	public function login($mail,$mdp)
	{
		$req=" select mdp from demandeurs where adresse_mail = '".$mail."';";
		$res=PdoFredi::$monPdo->query($req);
		$LaLigne=$res->fetch();
		$mdpbdd=$LaLigne['mdp'];

		if($mdp != $mdpbdd)
		{
			$message = "Votre saisie est érronée. Recommencez svp ";
			include("vues/v_message.php");
			include("vues/v_connexion.php");
		}
		else
		{
			$_SESSION['mail']=$mail;
			$req2 = "select * from demandeurs where adresse_mail = '".$mail."';";
			$res=PdoFredi::$monPdo->query($req2);
			$LaLigne=$res->fetch();

			$_SESSION['nom']=$LaLigne[1];
			$_SESSION['prenom']=$LaLigne[2];
			$_SESSION['rue']=$LaLigne[3];
			$_SESSION['cp']=$LaLigne[4];
			$_SESSION['ville']=$LaLigne[5];
			$_SESSION['mdp']=$LaLigne[6];

			$_SESSION['connexion']=true;
			$message = "Connexion réussi !";
			include("vues/v_message.php");
			include("vues/v_tableau.php");
		}
	}

	// Fin Fonctions de Login et d'inscriptions //


	// Fonctions de modification du compte //

	public function creationNouveauMdp($mail,$mdp)
	{
		$req = "UPDATE demandeurs
		SET mdp = '$mdp'
		WHERE adresse_mail = '$mail'";
		$res = PdoFredi::$monPdo->exec($req);
		$message = " Votre mot de passe a été modifié avec succès !";
		include("vues/v_message.php");
		include("vues/v_connexion.php");
	}

	public function modifierCompte($mail,$nom,$prenom,$rue,$cp,$ville,$mdp)
	{
		$req ="UPDATE demandeurs SET adresse_mail='$mail', nom='$nom', prenom ='$prenom', rue='$rue', cp='$cp', ville='$ville' ,mdp='$mdp' where adresse_mail='$mail';";
		$res =PdoFredi::$monPdo->exec($req);
	}

	public function verifInfoPers($mail,$infoPers)
	{
		$req = "select infoPers from demandeurs where adresse_mail='".$mail."';";
		$res = PdoFredi::$monPdo->query($req);
		
		$LaLigne=$res->fetch();

		$info = $LaLigne['infoPers'];
		if($infoPers != $info)
		{
			$message = " Votre information personnelle n'est pas correcte, veuillez vous inscrire!";
			include("vues/v_message.php");
			include("vues/v_inscription.php");
		}
		else
		{
			$message = " Veuillez changer votre Mot de Passe !";
			include("vues/v_message.php");
			include("vues/v_changerMDP.php");
		}
	}

	// Fin Fonctions de modification du compte //


	// Fonctions pour le tableau //

	public function afficheBordereau()
	{
		$mail = $_SESSION['mail'];
		$req = "select * from lignes_frais where adresse_mail = '$mail'";
		$res = PdoFredi::$monPdo->query($req);
		$donnees = $res -> fetchAll();
		return $donnees;
	}

	public function max_ligne()
	{
		$mail = $_SESSION['mail'];
		$req = "select COUNT(*) from lignes_frais where adresse_mail = '$mail'";
		$res = PdoFredi::$monPdo->query($req);
		$donnees = $res -> fetch();
		return $donnees;
	}

	public function ajouterLigne($mail,$date,$motif,$trajet,$km,$peage,$repas,$hebergement)
	{
		$req = " INSERT INTO lignes_frais values ('$mail','$date','$motif','$trajet',$km,$peage,$repas,$hebergement,null,null,null,null);";
		$res = PdoFredi::$monPdo ->exec($req);
	}

	public function modifLigne($mail,$date,$motif,$trajet,$km,$peage,$repas,$hebergement)
	{
		$req = " UPDATE lignes_frais SET dateLF='".$date."', motif='$motif', trajet ='$trajet', km=$km, cout_peage=$peage, cout_repas=$repas,cout_hebergement=$hebergement where adresse_mail='$mail';";
		echo $req;
		$res = PdoFredi::$monPdo->exec($req);
	}

	public function supprLigne($mail,$date)
	{
		$req =" DELETE FROM lignes_frais WHERE adresse_mail='$mail'and dateLF='$date';";
		$res = PdoFredi::$monPdo->exec($req);
	}

	// Fin fonctions pour le tableau //
}
?>