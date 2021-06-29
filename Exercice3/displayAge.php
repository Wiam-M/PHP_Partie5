<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$NumberConversion= (int) $_GET['age'];
    if ($NumberConversion >18 && $NumberConversion<130 ) {
        echo 'Nom : ' . $_GET['nom'].' '.'Prénom : ' .$_GET['prenom'].' '. 'age : '.$NumberConversion.' ans';
    }else{
        echo "L'âge ne peut être qu'un entier";
    }
    ?>
</body>
</html>