<?php
$tab1 = array( "Blanc", "Jaune", "Rouge", "Vert", "Bleu", "Noir");
$tab2 = array( "Bleu", "Rouge", "Violet", "Noir", "Jaune", "Orange");
echo "Le tableau 1 contient les éléments: <br>";
print_r($tab1);
echo "<hr>";
echo "Le tableau 2 contient les éléments: <br>";
print_r($tab2);
echo "<hr>";
echo "L'intersection de \$tab2 et de \$tab1: <br>";
$tab3 = array_intersect($tab1,$tab2);
print_r($tab3);
echo "<br>";
echo "L'intersection de \$tab1 et de \$tab2: <br>";
$tab4 = array_intersect($tab2,$tab1);
print_r($tab4);
echo "<hr>";
echo "La différence de \$tab1 et de \$tab2: <br>";
$tab5 = array_diff($tab1,$tab2);
print_r($tab5);
echo "<br>";
echo "La différence de \$tab2 et de \$tab1: <br>";
$tab6 = array_diff($tab2,$tab1);
print_r($tab6);
echo "<br>";

?>