<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ex.9: Lecture d'un tableau indicer avec une boucle while</title>
</head>

<body>
    <div>
        <?php
        //=====================================
        //  TABLEAU INDICER MULTIDIMENSIONNEL
        //=====================================
            //Creation du tableau
            $clients = array(
                            array("Leparc", "Paris", 35),
                            array("Duroc", "Vincennes", 22),
                            array("Denoel", "Saint Cloud", 47)
                        );
                        // AJOUT D'UN ELEMENT
                        $clients[7]= array("Duval", "Marseille", 76);

            echo "<table border='1'><tbody>";
            //LECTURE DES ELEMENTS
            while ($element = each($clients)) {
                echo "<tr><td>Element <b>$element[0]</b></td>";
                while ($val = each($element[1])) {
                    echo "<td><b>".$val[1]."</b></td>";
                }
                echo "</tr>";
            }
            echo "</tbody></table><hr/>";
            //===============================================
            //  TABLEAU ASSOCIATIF MULTIDIMENSIONNEL
            //===============================================
                // Creation du tablo multidimensionnel
                $clients = array(
                            array("client1"=>"Leparc","ville1"=>"Paris","age1"=>35),
                            array("client2"=>"Duroc","ville2"=>"Vincennes","age2"=>22),
                            array("client3"=>"Denoel","ville3"=>"Saint Cloud","age3"=>47)
                            );
                // Ajout d'un element
                $clients[7]=array("client7"=>"Duval","ville7"=>"Marseille","age7"=>76);

                //Lecture des elements
                echo "<table border='1'><tbody>";
                while ($element=each($clients)) {
                    echo "<tr><td> Element <b> $element[0] </b></td>";
                    while ($val=each($element[1])) {
                        echo "<td> clef: <b>".$val[0]."</b></td><td><b>".$val[1]."</b></td>";
                    }
                    echo "</tr>";
                }
                echo "</tbody></table>";
        ?>
    </div>
</body>

</html>