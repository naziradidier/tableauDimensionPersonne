
<?php
    $cars = array (
      array("Nom","Nazirah"),
      array("Prénom","Prisca"),
      array("age",19),
      array("Lieu","Ambatoroka")
    );

    for ($ligne = 0; $ligne < 4; $ligne++) {
        echo "<dl>";
        for ($col = 0; $col < 2; $col++) {
          echo "<dd>".$cars[$ligne][$col]."</dd>";
        }
        echo "</dl>";
      }
?>