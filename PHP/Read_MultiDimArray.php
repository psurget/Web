<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ex.12: Lecture des valeurs d'un tableau multidimensionnel</title>
</head>

<body>
    <div>
        <?php
                // Creation du tablo multidimensionnel
                $clients = array(
                            array("Leparc","Paris",35),
                            array("Duroc","Vincennes",22),
                            array("Denoel","Saint Cloud",47)
                            );
                // Ajout d'un element
                $clients[7]=array("Duval","Marseille",76);

                //Lecture des elements
                foreach ($clients as list($nom, $ville, $age)) {
                    echo "$nom $ville $age <br>";
                }      
        ?>
        </tbody>
        </table>
    </div>
</body>

</html>