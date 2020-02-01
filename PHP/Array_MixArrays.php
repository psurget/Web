<?php
//Fusion de tableaux indicés
echo "<h3>Fusion Tableaux Indicés</h3>";
$tab1 = array("Paris", "Lyon", "Marseille");
$tab2 = array("Nantes","Orléans","Tours","Paris");

$tab = array_merge($tab1,$tab2);
echo "array_merge donne: ";
print_r($tab);
echo "<hr>";

//FUSION DE TABLEAUX ASSOCIATIFS
echo "<h3>Fusion de Tableaux associatifs</h3>";
$tabass1 = array("Paris"=>75 , "Lyon"=>69, "Marseille"=>13);
$tabass2 = array("Nantes"=>44 , "Orléans"=>45, "Tours"=>37, "Paris"=>"Capitale");
echo "array_merge donne: ";
$tabass = array_merge($tabass1, $tabass2);
print_r($tabass);
echo "<hr>";

// BONNE FUSION DE TABLEAUX ASSOCIATIFS AVEC ARRAY_MERGE_RECURSIVE
$tabass3=array_merge_recursive($tabass1, $tabass2);
print_r($tabass3);
echo "<hr>";

// FUSION DE TABLEAUX AVEC ARRAY_COMBINE
$tabcle = array( 'F', 'D', 'B');
$tabval = array("France", "Allemagne", "Belgique");
$tabAss5=array_combine($tabcle,$tabval);
print_r($tabAss5);


?>