<?php
try {  $bdd= new PDO('mysql:host=localhost;dbname=jeux_video', 'root','rootmysql');
    }
catch(Exception $e){
    echo 'Erreur de connexion à la base de données';
    echo $e->getMessage();
}

$reponses = $bdd->query('SELECT * FROM jeux_video');
$donnees = $reponses->fetchAll(PDO::FETCH_ASSOC);
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercices </title>
</head>
<body>
    
    <table border="1" >
        <tr>
            <th> id </th>
            <th> Nom du jeu </th>
            <th> Possesseur </th>
            <th> Console </th>
            <th> Prix </th>
            <th> Nombre de joueurs </th>
            <th> Action <th>
        </tr>
        <?php for ($i=0; $i< count($donnees); $i++) : ?>
         <tr>
            <td><?= $donnees[$i]["ID"] ?> </td>
            <td><?= $donnees[$i]["nom"] ?> </td>
            <td> <?= $donnees[$i]["possesseur"] ?></td>
            <td><?= $donnees[$i]["console"] ?>PC</td>
            <td><?= $donnees[$i]["prix"] ?></td>
            <td><?= $donnees[$i]["nbre_joueurs_max"] ?></td>
            <td>
                <a href="traitement.php?action=edit&id=<?= $donnees[$i]['ID'] ?>">Modifier</a> | 
                <a href="traitement.php?action=del&id=<?= $donnees[$i]['ID'] ?>">Supprimer</a>
            </td>
        </tr>
<?php endfor; ?>
    </table>
</body>
</html>
<>