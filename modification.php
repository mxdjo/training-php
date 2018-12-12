
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
    <?php $sqlUpdateData = $bdd ->query('UPDATE jeux_video SET possesseur = $_POST["possesseur"] WHERE ID= $_POST["id"]'); ?>
    <?php echo 'Le nom du nouveau possesseur de ' . $_POST["console"] . ' est ' . $_POST["possesseur"] ;?>
</body>
</html>