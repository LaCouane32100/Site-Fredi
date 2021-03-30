<div id="tableau" style="margin-left: 20%">
<h1 style="padding-left: 35%"> Notes de frais </h1>

<?php
$pdo = PdoFredi::getPdoFredi();
$ligne = $pdo->afficheBordereau();
$max = $pdo->max_ligne();

$NbrCol = 7;
$NbrLigne = $max[0];

echo '<link rel="stylesheet" href="Css/style9.css">';
echo '<table>';
echo "<tr><th>Date</th><th>Motif</th><th>Trajet</th><th>km</th><th>Péage</th><th>Repas</th><th>Hébergement</th></tr>";
if ($NbrLigne!=0)
{
  for ($i=0; $i<$NbrLigne; $i++) {
     echo '<tr class="t2">';
     for ($j=1; $j<=$NbrCol; $j++) {
           // AFFICHAGE ligne $i, colonne $j
           echo '<td>';
           echo $ligne[$i][$j];
           echo '</td>';
           if ($j >= $NbrCol) {
             echo '<td>';
             echo '<a href="index.php?uc=gestionBordereau&action=modifierTableau&id='.$i.'"><input type="button" name="modif'.$NbrLigne.'" value="Modifier"></a>
             <a href="index.php?uc=gestionBordereau&action=supprimerLigneTableau&date='.$ligne[$i][1].'"><input type="button" name="suppr'.$NbrLigne.'" value="Supprimer"></a>';
             echo '</td>';
           }
     }
     echo '</tr>';
   }
}

echo '</table>';
echo ' <a href="index.php?uc=gestionBordereau&action=ajouterTableau"><input type="button" name="ajout" value="Ajouter"></a>';

 ?>
</div>