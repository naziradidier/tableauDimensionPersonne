<?php
tableau
//     $Personne = array (
//         $colonne = array("Nom", "Nazirah", "Miora", "Toavina"),
//         $colonne = array("Prénom","Prisca", "Jelisca", "Mbola"),
//         $colonne = array("age",19, 20, 21),
//         $colonne = array("Lieu","Ambanja", "Diego", "Majunga")
//     );
// boucle pour afficher le tableau

    for ($ligne= 0; $ligne < count($colonne); $ligne++) {
        liste sans decoration
      echo "<dl>";
      for ($col = 0; $col < count($colonne); $col++) {
        echo "<dd>".$Personne[$ligne][$col]."</dd>";
      }
      echo "</dl>";
    }

// affiché nom: ...
    echo $Personne[0][0].": ".$Personne[0][2].".<br>";
    echo $Personne[1][0]." :".$Personne[1][2].".<br>";
    echo $Personne[2][0].":".$Personne[2][2].".<br>";
    echo $Personne[3][0].": ".$Personne[3][2].".<br>";
    // *****************************************************
//     afficher miora seulement
    for ($ligne= 0; $ligne < count($colonne); $ligne++) {
//         liste
      echo "<dl>";
      for ($col = 0; $col < count($colonne)-1; $col+=2) {
        echo "<dd>".$Personne[$ligne][$col]."</dd>";
      }
      echo "</dl>";
    }
    // // *****************************************************
// afficher toavina seulement
    for ($ligne= 0; $ligne < count($Personne); $ligne++) {
      echo "<dl>";
      for ($col = 0; $col < count($colonne)-2; $col++) {
        echo "<dd>".$Personne[$ligne][$col]."</dd>";
      }
      echo "</dl>";
    }
?>
