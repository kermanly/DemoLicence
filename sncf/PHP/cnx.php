﻿<?php
//connexion a la base de données
// dsn = Data Source Name = driver MYSQL
$dsn='mysql:dbname=sncf;host=localhost';
//login
$login='root';
// Mot de passe
$motDePasse='';
// Connexion au serveur MySQL
try{
    $bdd = new PDO($dsn, $login, $motDePasse,
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
}
catch (PDOException $e){
	die('Erreur : ' . $e->getMessage());
}