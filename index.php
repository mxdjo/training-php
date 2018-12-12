<?php
try {  $bdd= new PDO('mysql:host=localhost;dbname=jeux_video', 'root','rootmysql');
    }
catch(Exception $e){
    echo 'Erreur de connexion à la base de données';
    echo $e->getMessage();
}

$reponses = $bdd->query('SELECT * FROM jeux_video');
$donnees = $reponses->fetchAll(PDO::FETCH_ASSOC);

echo "<pre/>";

var_dump($donnees);
?>