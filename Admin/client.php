<?php
session_start() ;
if ($_SESSION["user"] != 1) {
    header("Location: conn.php") ;
    exit ;
} 
require_once("../POO/client.php") ;
require_once("../POO/event.php") ;
require_once("../POO/lieu-clan.php") ;

$connexion = new PDO('mysql:host=localhost;port=3306;dbname=sae301','root','') ; 

$requete = 'SELECT * FROM participant' ;
$resultats = $connexion->query($requete) ;
$tableau = $resultats->fetchAll() ;
$listeClient = [] ;
foreach($tableau as $i) {
    $listeClient[] = new Client($i["id_participant"],$i["nom"],$i["prenom"],$i["mail"],$i["age"],$i["id_clan"],$i["pro"],$i["certificat"]) ;
    
    
    
    if (isset($_GET["id"])) {
        if ($i["id_participant"] == $_GET["id"]){
            $listeClient[count($listeClient)-1]->Modifier($_GET) ;
        }
    }
    
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title> Admin Client | La Guerre de l'Oiseau </title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" type="image/x-icon" href="../Illustrations/Commun-Aux-Pages/favicon.png"/>
</head>

<body>
    
<nav>
    <ul>
        <li><a href="client.php">Gérer les clients</a></li>
        <li><a href="event.php">Gérer les events</a></li>
        <li><a href="lieu.php">Gérer les lieux</a></li>
        <li><a href="clan.php">Gérer les clans</a></li>
    </ul>
</nav>
<h2>Liste des clients</h2>

<?php
foreach($listeClient as $i) {
    $i->AfficherAdmin() ;
}

?>
</body>
</html>