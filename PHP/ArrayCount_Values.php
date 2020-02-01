<?php
// EXERCICE 4
echo "<h3>Ex.4: Comptage avec array_count_values</h3>";
$tab = array("Web", "Internet", "PHP", "Javascript", "ASP", "PHP", "ASP");
$result = array_count_values($tab);
echo "Le tableau \$tab contient " . count($tab) . " elements <br>";
echo "Le tableau \$tab contient " . count($result) . " valeurs differentes <br>";
print_r($result);
?>