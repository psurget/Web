<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ex.7: Lecture d'un tableau indicer avec une boucle <b>WHILE</b></title>
</head>
<body>
    <div>
        <?php
        //CREATION DES CLIENTS
            $clients = array(
                            array("Leparc", "Paris", 35),
                            array("Duroc", "Vincennes", 22),
                            array("Denoel", "Saint Cloud", 47),
                        );
                        // AJOUT D'UN ELEMENT
                        $clients[7] = array("Duval","Marseille",76);

            //CREATION DU TABLEAU
            echo "<table border='1' width='100%'>";
            echo "<thead><tr><th>Client</th><th>Nom</th><th>Ville</th><th>Age</th></tr></thead>";
            echo "<tfoot><tr><th>Client</th><th>Nom</th><th>Ville</th><th>Age</th></tr></tfoot>";
            echo "<tbody>";
            
            // Lecture des elements
            $i=0;
            while (isset($clients[$i])) {
                echo "<tr><td align='center'><b>$i </b></td>";
                $j=0;
                while (isset($clients[$i][$j])) {
                    echo "<td><b>".$clients[$i][$j]."</b></td>";
                    $j++;
                }        
                echo "</tr>";
                $i++;   
            }
            ?>
        </tbody>
        </table>
    </div>
</body>
</html>