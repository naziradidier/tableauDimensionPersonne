<?php
    $Personne = array (
        $colonne = array("Nom", "Nazirah", "Miora", "Toavina"),
        $colonne = array("Prénom","Prisca", "Jelisca", "Mandresy"),
        $colonne = array("age",19, 20, 25),
        $colonne = array("Lieu","Ambanja", "Diego", "Antsirabe")
    );
    
    // afficher toavina seulement
    for ($ligne= 0; $ligne < count($colonne); $ligne++) {
      echo "<dl>";
      for ($col = 0; $col < count($colonne); $col+=3) {
        echo "<dd>".$Personne[$ligne][$col]."</dd>";
      }
      echo "</dl>";
    }
    ?>
    <a href="http://localhost/test/pageToPage.html.php"><p>retourner vers la liste</p></a>
    
