<?php
class Client {
    // ----- Zone Paramètres 
    public $nom="";
    public $prenom="";
    public $mail="";
    public $age=0;
    public $faction="";
    public $pro=0;
    public $certificat="";

    // ----- FIN Zone Paramètres



    // ----- Constructeur
    public function __construct($n,$p,$m,$a,$f,$pr,$c){
        $this->nom = $n;
        $this->prenom = $p;
        $this->mail = $m;
        $this->age = $a;
        $this->faction = $f;
        $this->pro = $pr;
        $this->certificat = $c;
    }


    // ----- FIN Constructeur



    // ----- Zone Méthodes 
    public function Afficher(){
        echo("Bonjour".$this->prenom. " !<br>");
        echo("Ton Mail".$this->mail. " !<br>");
        echo("Ton age".$this->age. " !<br>");
        echo("Ta faction".$this->faction. " !<br>");
        echo("Pro ?".$this->pro. " !<br>");
        echo("Ton certificat".$this->certificat. " !<br>");
        echo("Ton nom".$this->nom. " !<br>");
        }

    // ----- FIN Zone Méthodes
}
?>