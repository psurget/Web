<?php
function dbConnector($base, $param)
{
    include($param.".inc.php");
    $idcom = new mysqli(HOST, USER, PASS, $base, PORT);
    //affichage msg si erreur
    if (!$idcom) {
        echo "<script type='text/javascript'>";
        echo "alert('Connexion impossible à la base de données')</script>";
        exit();
    }
    return $idcom;
}
?>