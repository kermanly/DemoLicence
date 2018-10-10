<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DemoLicence</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        include './PHP/cnx.php';

        $sql = $bdd->prepare("select idCateg, nomCateg from categorie");
        $sql->execute();
        foreach ($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
        {
            echo "<input type='radio' value ='".$ligne['idCateg]."'>".$ligne['nomCateg'];
        }
?>
</body>
</html>