<?php
// EXERCICE 3
echo "<h3>Ex.3: Comptage du nombre de valeurs </h3>";

$tabdiv = array(
    "Bonjour",
    "Web",
    array(
        "1-0",
        "1-1",
        "1-2",
    ),
    1970,
    2013,
    array(
        "3-0",
        "3-1",
        "3-2",
        "3-3",
    ),
);
echo "Le tableau \$tabdiv contient " . count($tabdiv) . " elements <br>";
// "Le tableau \$tabdiv contient ".sizeof($tabdiv)." elements <br>";

// Comptage du nombre de valeurs
$nb_val = 0;
for ($i = 0; $i < count($tabdiv); $i++) {
    if (gettype($tabdiv[$i]) == "array") {
        $nb_val + count($tabdiv[$i]);
    } else {
        $nb_val++;
    }
}
echo "Le tableau \$tabdiv contient " . $nb_val . " valeurs <br>";
?>