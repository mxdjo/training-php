
    <?php 
    var_dump($_POST);
    ?> 

<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=jeux_video', 'root', 'rootmysql');
}
catch(Exception $e) {
    echo "Erreur de connexion à la base de donnee <br/>";
    echo $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mise à jour des données dans la BD</title>
</head>
<body>
   <form action="modification.php" method="post">
            <label for="newpossesseur">Nouveau Proprietaire de la console : </label> <input type="text" name="possesseur" id="possesseur" value="<?= $sqlSelectData[0]["possesseur"] ?>">
        <label for="console">Nom de la console : </label> <input type="text" name="console" id="console" value="<?= $sqlSelectData[0]["nom"] ?>">
        <input type="hidden" name="id" value="<?= $sqlSelectData[0]["ID"] ?>">
        <input type="submit" value="Valider">
    </form>
    <?php $sqlUpdateData = $bdd ->query('UPDATE jeux_video SET possesseur = $_POST["newpossesseur"] WHERE ID= $_POST["id"]'); ?>
</body>
</html>