<!DOCTYPE html>
<html>


<!--Bases - Exercice n°3

Écrire un script PHP qui contient : 

- une variable dont la valeur initialisée est TRUE
- un algorithme qui contrôle si la valeur de cette variable est égale à TRUE.

* si tel est le cas alors : afficher un paragraphe HTML dont le contenu est "Tout va bien".
* sinon : afficher un paragraphe HTML dont le contenu est "Une erreur est survenue".
Bases - Exercice n°3 (plus rapide mais aussi plus complexe) :
Réaliser l'exercice à l'aide des conditions ternaires. -->

    <head>
        <title>Exercice 3</title>
        <meta charset="utf-8" />
    </head>

    <body>
        <?php  $pioupiou = true; ?>

        <?php  if ($pioupiou): ?>
            <p>Tout va bien!</p>

        <?php else: ?>
            <p>Une erreur est survenue</p>

        <?php endif; ?>

    </body>
</html>