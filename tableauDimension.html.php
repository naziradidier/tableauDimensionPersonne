<!-- Créer un tableau multidimensionnel en PHP -->

<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
<!--         titre -->
        <h1>Titre principal</h1>
        <?php
            /*Tableau multidimensionnel numéroté stockant
             *des tableaux numérotés*/
            $suite = [
                [1, 2, 4, 8, 16],
                [1, 3, 9, 27, 81]
            ];
            
            /*Tableau multidimensionnel numéroté stockant
             *des tableaux associatifs et une valeur simple*/
            $utilisateurs = [
                ['nom' => 'Mathilde', 'mail' => 'math@gmail.com'],
                ['nom' => 'Pierre', 'mail' => 'pierre.giraud@edhec.com'],
                ['nom' => 'Amandine', 'mail' => 'amandine@lp.fr'],
                'Florian'
            ];
            
            /*Tableau multidimensionnel associatif stockant
             *des tableaux associatifs*/
            $produits = [
                'Livre' => ['poids' => 200, 'quantite' => 10, 'prix' => 15],
                'Stickers' => ['poids' => 10, 'quantite' => 100, 'prix' => 1.5]
            ]
        ?>
        <p>Un paragraphe</p>
    </body>
</html>
 

<!-- Récupérer ou afficher une valeur en particulier d’un tableau multidimensionnel -->

<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Titre principal</h1>
        <?php
            /*Tableau multidimensionnel numéroté stockant
             *des tableaux numérotés*/
            $suite = [
                [1, 2, 4, 8, 16],
                [1, 3, 9, 27, 81]
            ];
            
            /*Tableau multidimensionnel numéroté stockant
             *des tableaux associatifs et une valeur simple*/
            $utilisateurs = [
                ['nom' => 'Mathilde', 'mail' => 'math@gmail.com'],
                ['nom' => 'Pierre', 'mail' => 'pierre.giraud@edhec.com'],
                ['nom' => 'Amandine', 'mail' => 'amandine@lp.fr'],
                'Florian'
            ];
            
            /*Tableau multidimensionnel associatif stockant
             *des tableaux associatifs*/
            $produits = [
                'Livre' => ['poids' => 200, 'quantite' => 10, 'prix' => 15],
                'Stickers' => ['poids' => 10, 'quantite' => 100, 'prix' => 1.5]
            ];
            
            //$sous_suite = [1, 2, 4, 8, 16]
            $sous_suite = $suite[0];
            echo $sous_suite[0]. '<br>'.$sous_suite[2]. '<br>';
            
            //$sous_util = ['nom' => 'Amandine', 'mail' => 'amandine@lp.fr']
            $sous_util = $utilisateurs[2];
            echo $sous_util['nom']. '<br>';
            
            //$sous_produits = ['poids' => 200, 'quantite' => 10, 'prix' => 15]
            $sous_produits = $produits['Livre'];
            echo $sous_produits['prix'];
        ?>
        <p>Un paragraphe</p>
    </body>
</html>
 

<!-- Création d'un tableau multidimensionnel PHP et affichage des valeurs une à une -->

<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Titre principal</h1>
        <?php
            /*Tableau multidimensionnel numéroté stockant
             *des tableaux numérotés*/
            $suite = [
                [1, 2, 4, 8, 16],
                [1, 3, 9, 27, 81]
            ];
            
            /*Tableau multidimensionnel numéroté stockant
             *des tableaux associatifs et une valeur simple*/
            $utilisateurs = [
                ['nom' => 'Mathilde', 'mail' => 'math@gmail.com'],
                ['nom' => 'Pierre', 'mail' => 'pierre.giraud@edhec.com'],
                ['nom' => 'Amandine', 'mail' => 'amandine@lp.fr'],
                'Florian'
            ];
            
            /*Tableau multidimensionnel associatif stockant
             *des tableaux associatifs*/
            $produits = [
                'Livre' => ['poids' => 200, 'quantite' => 10, 'prix' => 15],
                'Stickers' => ['poids' => 10, 'quantite' => 100, 'prix' => 1.5]
            ];
            
            echo $suite[0][0]. '<br>'.$suite[0][2]. '<br>';
            echo $utilisateurs[2]['nom']. '<br>';
            //Affichage d'une valeur simple contenue directement dans $utilisateurs
            echo $utilisateurs[3]. '<br>';
            echo $produits['Livre']['prix'];
        ?>
        <p>Un paragraphe</p>
    </body>
</html>
 
<!-- Parcourir et afficher les valeurs d’un tableau multidimensionnel -->
<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Titre principal</h1>
        <?php
            $suite = [
                [1, 2, 4, 8, 16],
                [1, 3, 9, 27, 81]
            ];
            $utilisateurs = [
                ['nom' => 'Mathilde', 'mail' => 'math@gmail.com'],
                ['nom' => 'Pierre', 'mail' => 'pierre.giraud@edhec.com'],
                ['nom' => 'Amandine', 'mail' => 'amandine@lp.fr'],
            ];
            $produits = [
                'Livre' => ['poids' => 200, 'quantite' => 10, 'prix' => 15],
                'Stickers' => ['poids' => 10, 'quantite' => 100, 'prix' => 1.5]
            ];
            foreach ($suite as $suitenb => $n){
                echo 'Suite ' .($suitenb + 1). ' : ';
                foreach($n as $ni => $nn){
                    echo $nn. ', ';
                }
                echo '<br><br>';
            }
            foreach($utilisateurs as $nb => $infos){
                echo 'Utilisateur n°' .($nb + 1). ' :<br>';
                foreach ($infos as $c => $v){
                    echo $c. ' : ' .$v. '<br>';
                }
                echo '<br>';
            }
            foreach ($produits as $clef => $produit){
                echo 'Produit : ' .$clef. '<br>';
                foreach($produit as $caracteristique => $valeur){
                    echo $caracteristique. ' : ' .$valeur. '<br>';
                }
                echo '<br>';
            }
        ?>
        <p>Un paragraphe</p>
    </body>
</html>
 
<!-- Afficher rapidement la structure d’un tableau en PHP -->
<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Titre principal</h1>
        <?php
            $suite = [
                [1, 2, 4, 8, 16],
                [1, 3, 9, 27, 81]
            ];
            $utilisateurs = [
                ['nom' => 'Mathilde', 'mail' => 'math@gmail.com'],
                ['nom' => 'Pierre', 'mail' => 'pierre.giraud@edhec.com'],
                ['nom' => 'Amandine', 'mail' => 'amandine@lp.fr'],
            ];
            $produits = [
                'Livre' => ['poids' => 200, 'quantite' => 10, 'prix' => 15],
                'Stickers' => ['poids' => 10, 'quantite' => 100, 'prix' => 1.5]
            ];
            
            echo '<pre>';
            print_r($produits);
            var_dump($produits);
            echo '</pre>';
        ?>
        <p>Un paragraphe</p>
    </body>
</html>
 
