<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
<?php
    $Personne = array (
        $colonne = array("Nom", "Nazirah", "Miora", "Toavina"),
        $colonne = array("Prénom","DIDIER", "Jelisca", "Mbola"),
        $colonne = array("age",19, 20, 27),
        $colonne = array("Lieu","Diego", "Fianara", "Majunga")
    );
    
    // afficher toavina seulement
    for ($ligne= 0; $ligne < count($Personne); $ligne++) {
        echo "<dl>";
        for ($col = 0; $col < count($colonne)-2; $col++) {
          echo "<dd>".$Personne[$ligne][$col]."</dd>";
        }
        echo "</dl>";
      }
    ?>
    <a href="http://localhost/test/pageToPage.html.php"><p>retourner vers la liste</p></a>
     </body>
    </html>