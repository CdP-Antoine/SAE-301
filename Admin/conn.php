<?php
session_start() ;
$_SESSION["user"] = 0 ;
if (isset($_GET["name"])) {
    if ($_GET["name"] == "admin" && $_GET["mdp"] == 1234) {
        session_start() ;
        $_SESSION["user"] = 1 ;
        header("Location: client.php");
        exit ;
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title> Admin | La Guerre de l'Oiseau </title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" type="image/x-icon" href="Illustrations/Commun-Aux-Pages/favicon.png"/>
</head>
<body>
    <form action="" methode="GET">
        <h2>Connexion à la page d'administration </h2>

        <div>
            <label for="name"> Nom d'utilisateur </label>
            <input type="text" name="name">
        </div>

        <div>
            <label for="mdp"> Mot de passe </label>
            <input type="password" name="mdp">
        </div>

        <div>
            <input type="submit" value="Connexion">
        </div>
    </form>
</body>
</html>