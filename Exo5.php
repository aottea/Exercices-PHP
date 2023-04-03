<!DOCTYPE html>
<html>


<!--Bases Exercice n°5 : La boucles FOR

Affichez la table de multiplication de la table de 8 à l'aide d'une boucle FOR.
* La boucle FOR est l'équivalent d'une boucle POUR en pseudo code *
* Son fonctionnement est relativement équivalent *
Au moindre doute, documentez vous. -->

    <head>
        <title>Exercice 5</title>
        <meta charset="utf-8" />
    </head>

    <body>
        <?php  
         
        for($line = 0; $line <= 10; $line++)
        {
            echo $line,"x 8 = ", $line * 8 , '</br></br>' ;
        }
        
        ?>

    </body>
</html>