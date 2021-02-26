<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php include 'returnTable.php';
    // var_dump($Personne);    
    
        if($_GET["nom"]){
            for ($ligne= 0; $ligne < count($Personne); $ligne++) {
                var_dump($Personne[0][0]);
                // echo "<dl>".$Personne[0];
                for($col= 0; $col<count($Personne[$ligne]); $col++){
                    $anarana= $_GET['nom'];
                    if($Personne[$ligne][$col]== $anarana){
                        echo $Personne[$ligne][$col];
                        var_dump($Personne[$ligne]);
                    }
                }
                echo "</dl>";
              }
        }
        
?>

   

</body>
</html>