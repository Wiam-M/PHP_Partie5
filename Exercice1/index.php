<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Créez un lien avec les paramètres "nom" et "prénom" dirigeant sur la page courante et affichez ces paramètres.</h1>
    <a href="index.php?nom=Malek&amp;prenom=Wiam ">cliquez ici</a>
    <?php
    echo 'Nom : ' . $_GET['nom'].' '.'Prénom : '.$_GET['prenom'];
    
    ?>
</body>
</html>