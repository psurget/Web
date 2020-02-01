<?php

// EX.1: TABLEAU MULTIDIMENSIONNEL
$tabmulti = [
    ["ligne 0-colonne 0", "ligne 0-colonne 1", "ligne 0-colonne 2"],
    ["ligne 1-colonne 0", "ligne 1-colonne 1", "ligne 1-colonne 2"],
    ["ligne 2-colonne 0", "ligne 2-colonne 1", "ligne 2-colonne 2"],
    ["ligne 3-colonne 0", "ligne 3-colonne 1", "ligne 3-colonne 2"],
];
echo "<h3>Tableau multidimensionnel</h3><table border='1' width='100%'><tbody>";

/*echo "<tr><td>";
echo print_r($tabmulti);
echo "<tr><td>";*/

for ($i = 0; $i < count($tabmulti); $i++) {
    echo "<tr>";
    for ($j = 0; $j < count($tabmulti[$i]); $j++) {
        echo "<td><h3>..", $tabmulti[$i][$j], "..</h3></td>";
    }
    echo "</tr>";
}
echo "</tbody></table>";
?>
