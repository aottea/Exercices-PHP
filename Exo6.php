<!DOCTYPE html>
<html>


<!--Bases Exercice n°06 : La boucle FOR (suite)

Affichez les 10 premières table de multiplication à l'aide de boucles FOR imbriquées.
Les tables seront interfacées au sein d'un tableau HTML à deux dimensions tel qui suit : -->

    <head>
        <title>Exercice 6</title>
        <meta charset="utf-8" />
    </head>

    <body>
        
            
        <?php  
        $end = 10;
        echo "<table border='1'>"; 
        echo "<caption>Table de multiplication </caption>";
        echo "<tr>"; 
        echo "<th>x</th>"; 
        
        $i = 1;
        while ($i<=$end){
            echo "<th>".$i."</th>";
            $i++;
        }
        echo "</tr>"; 
    
        $col = 1;
        while($col<=$end){
            echo "<tr>"; 
            echo "<th>".$col."</th>"; 
            
            $lig = 1;
            while($lig<=$end){
                echo "<td>".($col*$lig)."</td>"; 
            $lig++;
            }
            echo "</tr>"; 
            $col++;
        }
        ?>
        </table>
    </body>
</html>