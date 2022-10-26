<?php 
/*
[FUNCTION] anchored_link || Allows you to build pseudo-direct links
[VARIABLE] $path = Source link to the file.
[RETURN] Pseudo-direct link to the selected source link file
*/
function anchored_link($path) {

	$url = explode("/", $_SERVER["PHP_SELF"]) ;	// Retrieving the Current URL
	array_shift($url) ;
	array_shift($url) ;					// Establishing the anchor at the root of the server

	$her = "" ;							// Initializing the Return to Root Tag
	for ($i = 0 ; $i < count($url)-1 ; $i++) {
		$her = $her."../" ;				// Construction of the Return to Root
	}

	return($her.$path) ;
}

?>