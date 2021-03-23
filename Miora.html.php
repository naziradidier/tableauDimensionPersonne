<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Toavina</title>
  </head>
  <body>
<?php
    $Personne = array (
        $colonne = array("Nom", "Nazirah", "Miora", "Toavina"),
        $colonne = array("Prénom","Prisca", "RATSIBAZAFY", "Mbola"),
        $colonne = array("age",19, 25, 21),
        $colonne = array("Lieu","Diego", "Fianarantsoa", "Antsirabe")
    );
    
    // afficher toavina seulement---------------------------------------------------------------------------------------
    for ($ligne= 0; $ligne < count($colonne); $ligne++) {
          echo "<dl>";
          for ($col = 0; $col < count($colonne)-1; $col+=2) {
            echo "<dd>".$Personne[$ligne][$col]."</dd>";
          }
          echo "</dl>";
        }
    ?>
     <a href="http://localhost/test/pageToPage.html.php"><p>retourner vers la liste</p></a>
    </body>
    </html>
