<?php
$action = $_REQUEST['action'];
switch($action)
{
  case 'tableau':
  {
    include("vues/v_tableau.php");
    break;
  }

  case 'modifierTableau':
  {
    $id=$_REQUEST['id'];
    include("vues/v_modif_tableau.php");
    break;
  }

  case 'ajouterTableau':
    {
      include("vues/v_ajouter_tableau.php");
      break;
    }

  case 'supprimerLigneTableau':
    {
      $date=$_REQUEST['date'];
      $mail=$_SESSION['mail'];
      $pdo->supprLigne($mail,$date);
      include("vues/v_tableau.php");
      break;
    }

  case 'modifierLigne':
  {
    $date=$_POST['date'];
    $motif=$_POST['motif'];
    $trajet=$_POST['trajet'];
    $km=$_POST['km'];
    $peage=$_POST['peage'];
    $repas=$_POST['repas'];
    $hebergement=$_POST['hebergement'];
    $mail=$_SESSION['mail'];
    $pdo->modifLigne($mail,$date,$motif,$trajet,$km,$peage,$repas,$hebergement); //Mettre les données du formulaire pour la fonction
    include("vues/v_tableau.php");
    break;
  }

  case 'ajouterLigne':
  {
    $date=$_POST['date'];
    $motif=$_POST['motif'];
    $trajet=$_POST['trajet'];
    $km=$_POST['km'];
    $peage=$_POST['peage'];
    $repas=$_POST['repas'];
    $hebergement=$_POST['hebergement'];
    $mail=$_SESSION['mail'];
    $pdo->ajouterLigne($mail,$date,$motif,$trajet,$km,$peage,$repas,$hebergement); //ajouter une ligne 
    include("vues/v_tableau.php");
    break;
  }

}


 ?>
