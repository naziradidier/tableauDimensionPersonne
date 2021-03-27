<?php
//table
    $Personne = array (
        $colonne = array("Nom", "Nazirah", "Miora", "Toavina"),
        $colonne = array("Prénom","Prisca", "Jelisca", "Mbola"),
        $colonne = array("age",19, 20, 21),
        $colonne = array("Lieu","Ambanja", "Diego", "Majunga")
    );

    function returnTable($table){
        $table = array("Nazirah", "Miora", "Toavina");
          echo "<ul>";
          for ($i = 0; $i < count($table); $i++) {
              echo "<li>";
              echo "<a href=\"http://localhost/test/$table[$i].html.php\"> $table[$i]</a>";
              echo "</li>";
          }
          echo "</ul>";
          }  
?>
