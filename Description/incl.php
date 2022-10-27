<!-- Fichier d'inclusion dans description.php > main -->


<section id="content">
	<?php require_once("Description/content.php") ;?>
</section>

<section id="clans">
	<?php
  	foreach($listeClan as $i) {
      	$i->Afficher() ;
  	}
  	?>
</section>

<section id="slider-lieux">
    <?php require_once("Index/slider-lieux.php") ;?>
</section>
