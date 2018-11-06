<?php

include "cnx.php";

$sql = $bdd->prepare("select nomJeux from jeux where numCateg = ".$_GET['num']);
$sql->execute();

foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
{
    echo "<p>".$ligne['nomJeux']."</p>";
}


?>