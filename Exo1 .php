<!DOCTYPE html>
<html>

<!-- Bases - Exercice n°01 :
Écrire un script PHP qui contient :

- une variable dont la valeur est initialisée avec votre PRENOM.
- à l'aide de la commande ECHO, affichez le contenu de cette variable au sein d'un titre HTML de 1er niveau. -->


<?php
 $prenom = "Gloria"; ?>


    <head>
        <title>Exercice 1</title>
        <meta charset="utf-8" />
    </head>
    <body>

        <h1>Bonjour <?php echo $prenom ?></h1>
        
    </body>
</html>
