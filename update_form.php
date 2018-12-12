<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier</title>
</head>
<body>
    <form action="modification.php" method="post">
            <label for="possesseur">Proprietaire de la console : </label> <input type="text" name="possesseur" id="possesseur" value="<?= $sqlSelectData[0]["possesseur"] ?>">
        <label for="console">Nom de la console : </label> <input type="text" name="console" id="console" value="<?= $sqlSelectData[0]["nom"] ?>">
        <input type="hidden" name="id" value="<?= $sqlSelectData[0]["ID"] ?>">
        <input type="submit" value="Valider">
        
    </form>
</body>
</html>

<?php
// var_dump($sqlSelectData[0]);
die();
?>