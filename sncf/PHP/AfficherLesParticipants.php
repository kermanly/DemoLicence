<?php
include 'cnx.php';

// 1) on prépare la requête
$sql = $bdd->prepare("SELECT codeAgent, nom, prenom from agent, inscription where agent.code = inscription.codeAgent and numeroFormation = '".$_GET['idFormation']."'");
// 2) on l'éxecute
$sql->execute();
// 3) on traite le résultat
foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
{
    echo "<input type='checkbox' value='".$ligne['codeAgent']."'>".$ligne['nom']." - ".$ligne['prenom'] ."</input>";
}
