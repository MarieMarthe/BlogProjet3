<?php
//On inclut le fichier dont on a besoin (ici à la racine de notre site)
require 'Database.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Mon blog</title>
</head>

<body>
<div>
    <h1>Mon blog</h1>
    <p>En construction</p>
    <?php
    //On crée un nouvel objet $db, qui est une instance de la classe Database
    $db = new Database();
    //On fait appel à notre méthode getConnection()
    //On ajoute un echo pour vérifier qu'un message s'affiche à l'écran
    echo $db->getConnection();
    ?>
</div>
</body>
</html>