<?php
require_once("lib/PHP-librairies/Gestion-URL/anchored_link.php");
require_once("POO/client.php") ;
require_once("POO/event.php") ;
require_once("POO/lieu-clan.php") ;

$connexion = new PDO('mysql:host=localhost;port=3306;dbname=sae301','root','') ; 

$requete = 'SELECT id_lieu FROM lieu' ;
$resultats = $connexion->query($requete) ;
$tableau = $resultats->fetchAll() ;
$listeLieu = [] ;
foreach($tableau as $i) {
    $listeLieu[] = new LieuClan($i["id_lieu"],1) ;
}

$requete = 'SELECT id_clan FROM clan' ;
$resultats = $connexion->query($requete) ;
$tableau = $resultats->fetchAll() ;
$listeClan = [] ;
foreach($tableau as $i) {
    $listeClan[] = new LieuClan($i["id_clan"],0) ;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> L'Histoire | La Guerre de l'Oiseau </title>

	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" type="image/x-icon" href="Illustrations/Commun-Aux-Pages/favicon.png"/>
	<link href="Description/general.css" rel="stylesheet">
	<link href="global.css" rel="stylesheet">

	<script src="script.js"></script>


</head>
<body>

<header>
	<?php require_once("Commun-Aux-Pages/header.php") ;?>
</header>
<div id="remonter">
	<a href="#"><img src="Illustrations/Commun-Aux-Pages/fleche.png" alt="Remonter en haut de page" ></a>
</div>
<main>
	<?php require_once("Description/incl.php") ;?>
</main>

<footer>
	<?php require_once("Commun-Aux-Pages/footer.php") ;?>
</footer>

</body>
</html>