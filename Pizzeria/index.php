<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript" src="../JQuery/jquery-3.1.1.js"></script>
        <script type="text/javascript" src="../JS/fonctions.js"></script>
    </head>
    <body>

    <table border="1" cellpadding="15" cellspacing="10" width="100%">
   <tr>
      <th>Numéro de la commande</th>
      <th>Choix du livreur</th>
      <th>Choix du client</th>
    </tr>
    <td> 
        <?php
            include 'cnx.php';
            
            $sql = $bdd->prepare("select numCli, numCde from commandes");
            $sql->execute();
            echo "<label>Numero commande</label><br>";
            echo "<select id=numcommande onchange='AfficherLesFormations()'>";
            foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
        {
            echo "<option value='".$ligne['numCli']."'>".$ligne['numCde']."</option>";
        }
            echo "</select><td>";

            $sql = $bdd->prepare("select numLiv, nomLiv from livreurs");
            $sql->execute();
            echo "<label>Choix du livreur</label><br>";
            echo "<select id=nomdulivreurs onchange='()'>";
            foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
            {
                echo "<option value='".$ligne['numLiv']."'>".$ligne['nomLiv']."</option>";
            }
            echo "</select><td>";

            $sql = $bdd->prepare("select numCli, nomCli from clients");
            $sql->execute();
            echo "<label>Choix du client</label><br>";
            echo "<select id=nomduclient onchange='()'>";
            foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
            {
                echo "<option value='".$ligne['numCli']."'>".$ligne['nomCli']."</option>";
            }
            echo "</select></td>";
    ?>
     <table border="1" cellpadding="25" cellspacing="10" width="100%">
   <tr>
      <th>Choix pizza</th>
    </tr>
    </table>
    <table border="1" cellpadding="15" cellspacing="10" width="100%">
   <tr>
      <th>Nom pizza</th>
      <th>Nombre de personnes</th>
      <th>Prix</th>
      <th>Quantité</th>
    </tr>
    <td>   
    <?php
    
            $sql = $bdd->prepare("select numPiz, nomPiz from pizzas");
            $sql->execute();
        
            foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
            {
                echo "<center><option value='".$ligne['numPiz']."'>".$ligne['nomPiz']."</option></center>";
            }
            echo "</select><td>";

            $sql = $bdd->prepare("select numPiz, nbPers from pizzas");
            $sql->execute();
         
            foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
            {
                echo "<center><option value='".$ligne['numPiz']."'>".$ligne['nbPers']."</option></center>";
            }
            echo "</select><td>";

            $sql = $bdd->prepare("select numPiz, prix from pizzas");
            $sql->execute();
         
            foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
            {
                echo "<center><option value='".$ligne['numPiz']."'>".$ligne['prix']."</option></center>";
            }
            echo "</select><td>";
 
        ?>

<input type="range" min="0" max="10" value="0" oninput="document.getElementById('AfficheRange').textContent=value" />
<span id="AfficheRange">0</span>


</html>