<!DOCTYPE html>
<html>


<!--Bases - Exercice n°4 (manipulation de dates et d'horaires) :

Cas concret : sur votre site vous pourriez avoir envie d'afficher un message en fonction d'un horraire particulier !

Ecrire un script PHP qui, en fonction de l'heure actuelle affiche :

"Bonjour, il est XXhXX!" (entre 6h00 et 14h00)✅
"Bonne après-midi, il est XXhXX!" (entre 14h01 et 19h00)✅
"Bonsoir, il est XXhXX!" (entre 19h01 et Minuit)
 "Oh, fais dodo, il est tard là!" (entre 00h01 et 5h59) 


 * Pour cet exercice je vous conseille de vous documenter au sujet de la timezone & de la fonction date()*
* Ressources : https://www.php.net/manual/fr/function.time.php (Timo K)
                           https://www.php.net/manual/fr/function.date.php -->

    <head>
        <title>Exercice 4</title>
        <meta charset="utf-8" />
    </head>

    <body>
    <?php 
    $matins = "06";
    $matine = "14";
    $soirs = "19";
    $soire = "00";
    $mtn = date('H');


    if ($mtn >= $matins && $mtn <= $matine) {
        echo "Bonjour, il est ", date('H'), "h", date('i');
    }elseif ($mtn > $matine && $mtn <= $soirs) {
        echo "Bonne après-midi, il est ", date('H'), "h", date('i');
    }elseif ($mtn > $soirs && $mtn<=$soire) {
        echo "Bonsoir, il est ", date('H'), "h", date('i');
    }else{
        echo "Oh, fais dodo, il est tard là!";
    }

    ?>    
    </body>
</html>