<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ex.12: Lecture d'un tableau multidimensionnel avec foreach</title>
</head>

<body>
    <div>
        <?php
            //===============================================
            //  TABLEAU ASSOCIATIF MULTIDIMENSIONNEL
            //===============================================
                // Creation du tablo multidimensionnel
                $clients = array(
                            array("client 1"=>"Leparc","ville 1"=>"Paris","age 1"=>35),
                            array("client 2"=>"Duroc","ville 2"=>"Vincennes","age 2"=>22),
                            array("client 3"=>"Denoel","ville 3"=>"Saint Cloud","age 3"=>47)
                            );
                // Ajout d'un element
                $clients[7]=array("client 7"=>"Duval","ville 7"=>"Marseille","age 7"=>76);

                //Lecture des elements
                echo "<table width='100%' border='1'><tbody><thead><tr><th>Client</th><th>Nom</th><th>Ville</th><th>Age</th></tr></thead><tbody>";
                foreach ($clients as $cle=>$tab) {
                    echo "<tr><td align='center'><b>$cle</b></td>";
                    foreach ($tab as $key => $valeur) {
                        echo "<td>$key: <b>$valeur</b></td>";                   
                     }
                     echo "</tr>";
                }      
        ?>
        </tbody>
        </table>
    </div>
</body>

</html>