<?php
require_once("lib/PHP-librairies/Gestion-URL/anchored_link.php");
require_once("POO/client.php") ;
require_once("POO/event.php") ;
require_once("POO/lieu-clan.php") ;

if (isset($_POST["nom"])) {
	if ($_POST["child"] == 1) {
		$age = 40;
	} else {
		$age = $_POST["age"];
	}

	$client = new Client(0,$_POST["nom"],$_POST["prenom"],$_POST["mail"],$age,$_POST["faction"],$_POST["pro"],$_POST["certificat"]);
	

}

?>
<!DOCTYPE html>
<html>
<head>
	<title> Inscription | La Guerre de l'Oiseau </title>

	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" type="image/x-icon" href="Illustrations/Commun-Aux-Pages/favicon.png"/>

	<link href="Formulaire/general.css" rel="stylesheet">
	<link href="global.css" rel="stylesheet">

	


</head>
<body>

<header>
	<?php require_once("Commun-Aux-Pages/header.php") ;?>
</header>

<main>
    <section>
        <?php
        if ($client->Enregistrer()) {
            echo "<h2> Inscription réussie </h2>" ;
            echo "<a href='formulaire.php'> Inscrire une nouvelle personne </a>";
            echo '<a href="index.php"> Revenir à l&apos;accueil </a>';
        } else {
            echo "<h2> Une erreur est survenue </h2>" ;
            echo "<p> Votre adresse mail a certainement été déjà utilisée. Si le problème persiste, veuillez contacter le support </p>";
            echo "<a href='formulaire.php'> Revenir au formulaire </a>";
            echo '<a href="index.php"> Revenir à l&apos;accueil </a>';
        }

        ?>
    </section>
</main>

<footer>
	<?php require_once("Commun-Aux-Pages/footer.php") ;?>
</footer>

</body>
</html>