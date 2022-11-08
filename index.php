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
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Accueil | La Guerre de l'Oiseau</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Page d'accueil du site de la Guerre de l'Oiseau">
	<meta name="author" content="Agence Plumeuh">

	<meta property="og:locale" content="fr_FR"/>
	<meta property="og:type" content="event"/>
	<meta property="og:url" content="http://guerreoiseau.mmi-lepuy.fr/index.php"/>
	<meta property="og:image" content="Illustrations/Commun-Aux-Pages/favicon.png" />
	<meta property="og:title" content="Page d'accueil du site"/>
	<meta property="og:site_name" content="La Guerre de l'Oiseau"/>

	<link rel="icon" type="image/x-icon" href="Illustrations/Commun-Aux-Pages/favicon.png"/>
	<link href="Index/general.css" rel="stylesheet">
	<link href="global.css" rel="stylesheet">

</head>
<body>

<header>
	<?php require_once("Commun-Aux-Pages/header.php") ;?>
</header>
<div id="remonter">
	<a href="#"><img src="Illustrations/Commun-Aux-Pages/fleche.png" alt="Remonter en haut de page" ></a>
</div>

<main>
	<div class="imageintro">
		<img src="Illustrations/Index/logosimple.png" alt="Logo La Guerre de l'Oiseau">
	</div>
	<h1>La Guerre de l'Oiseau</h1>


	<?php require_once("Index/incl.php") ;?>
</main>


<footer>
	<?php require_once("Commun-Aux-Pages/footer.php") ;?>
</footer>

</body>
</html>