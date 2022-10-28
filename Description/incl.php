<!-- Fichier d'inclusion dans description.php > main -->


<section id="content">
	<?php require_once("Description/content.php") ;?>
</section>

<section id="clans">
	<div class="slider">
	<h2> Les différents clans  </h2>
		<?php
		foreach($listeClan as $i) {
			$i->Afficher() ;
		}
		?>
	</div>
</section>

<section id="slider-lieux">
    <?php require_once("Index/slider-lieux.php") ;?>
</section>
