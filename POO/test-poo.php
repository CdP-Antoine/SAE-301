<?php
// ----- Zone de test POO
require_once("client.php") ;
require_once("event.php") ;
require_once("lieu-clan.php") ;

$user = new Client("TestNom","TestPre","test@gmail.com",11,3,0,"") ;

$lieu1 = new LieuClan(1,0) ;

$event = new Event(3) ;
?>