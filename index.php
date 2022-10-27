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
<html>
<head>
	<title>Accueil | La Guerre de l'Oiseau</title>

	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" type="image/x-icon" href="Illustrations/Commun-Aux-Pages/favicon.png"/>
	<link href="Index/general.css" rel="stylesheet">
	<link href="global.css" rel="stylesheet">

	<script src="script.js"></script>
</head>
<body>

<header>
	<?php require_once("Commun-Aux-Pages/header.php") ;?>
</header>


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