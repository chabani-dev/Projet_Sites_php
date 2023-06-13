<?php
// todo #1 : connexion avec la bdd
$dsn="mysql:host=localhost;dbname=shoes";
$user="root";
try{
$pdo=new PDO($dsn,$user);
} catch(exception $erreur){
    echo '<h1>Erreur de connexion avec la BDD </h1>';
    exit;
}

