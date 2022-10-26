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

$requete = 'SELECT id_lieu FROM lieu' ;
$resultats = $connexion->query($requete) ;
$tableau = $resultats->fetchAll() ;
$listeClient = [] ;
foreach($tableau as $i) {
    $listeLieux[] = new LieuClan($i["id_lieu"],1) ;

    if (isset($_GET["id"])) {
        
        if ($i["id_lieu"] == $_GET["id"]){
            $listeLieu[count($listeLieu)-1]->Modifier($_GET) ;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title> Admin Lieux | La Guerre de l'Oiseau </title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" type="image/x-icon" href="Illustrations/Commun-Aux-Pages/favicon.png"/>
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
<?php
foreach($listeLieux as $i) {
    $i->AfficherAdmin() ;
}
?>
</body>
</html>