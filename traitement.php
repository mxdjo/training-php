<?php

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=jeux_video', 'root', 'rootmysql');
    }
    catch(Exception $e) {
        echo "Erreur de connexion à la base de donnee <br/>";
        echo $e->getMessage();
    }

switch ($_GET['action']) {
    case 'edit':
        $sqlSelectData = $bdd->query('SELECT * FROM jeux_video WHERE ID =' . $_GET['id'])->fetchAll(PDO::FETCH_ASSOC);
        include 'update_form.php';
        include ' modification.php';
        break;
    case 'del':
    die('Super del');
    break;

    default:
       header('Location: /jeux.php');
        break;
}

    $reponse = $reponses = $bdd->query('SELECT * FROM jeux_video');

    $donnees = $reponse->fetchAll(PDO::FETCH_ASSOC);
    

    $supprimer= $bdd->prepare('DELETE FROM jeux_video WHERE ID = :id');
    $delete = $supprimer->execute(array(
        'id' => $_GET['query']
    ));

    if ($delete) echo 'Ligne supprimée';
    else echo 'Erreur de suppression';