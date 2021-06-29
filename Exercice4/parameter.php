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
    if (isset($_GET['serveur'])) {
        echo 'le langage est : ' .$_GET['langage']. ' et le serveur est : '.$_GET['serveur'];
    }else {
        echo 'pas de serveur déféni !';
    }
    
?>
</body>
</html>