<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ex.6: Lecture d'un tableau multidimensionnel indicer avec une boucle</title>
</head>

<body>
    <div>
        <?php
        //Creation du tableau
$clients = array(array("Leparc", "Paris", 35), array("Duroc", "Vincennes", 22), array("Denoel", "Saint Cloud", 47));
//2e maniere de creer le meme tablo
$tab1 = array("Leparc", "Paris", 35);
$tab2 = array("Duroc", "Vincennes", 22);
$tab3 = array("Denoel", "Saint Cloud", 47);
$clients = array($tab1, $tab2, $tab3);
echo "<table border=\"1\" width=\"100%\">";
echo "<thead><tr><th>Client</th><th>Nom</th><th>Ville</th><th>Age</th></tr></thead>";
echo "<tfoot><tr><th>Client</th><th>Nom</th><th>Ville</th><th>Age</th></tr></tfoot>";
echo "<tbody>";
// Lecture des indices et des valeurs
for ($i = 0; $i < count($clients); $i++) {
    echo "<tr><td align='center'><b>$i </b></td>";
    for ($j = 0; $j < count($clients[$i]); $j++) {
        echo "<td><b>" . $clients[$i][$j] . "</b></td>";
    }
    echo "</tr>";
}
?>
</tbody>
</table>
    </div>
</body>

</html>