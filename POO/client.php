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

    public $connexion ;
    // ----- FIN Zone Paramètres



    // ----- Constructeur
    public function __construct($n,$p,$m,$a,$f,$pr,$c){
        $this->connexion = new PDO('mysql:host=localhost;port=3306;dbname=sae301','root','') ; 

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

    public function Valider() {
        $requete = 'SELECT mail FROM participant WHERE mail="'.$this->mail.'"' ;
        $resultats = $this->connexion->query($requete) ;
        $tableau = $resultats->fetchAll() ;

        if (isset($tableau[0])) {
            return false ;
        }
        return true ;
    }

    public function Enregistrer() {
        if ($this->Valider() == true) {
            $requete = 'INSERT INTO participant (id_participant, nom, prenom, mail, age, pro, id_clan, certificat) VALUES (NULL, "'.$this->nom.'", "'.$this->prenom.'", "'.$this->mail.'", "'.$this->age.'", "'.$this->pro.'", "'.$this->faction.'", "'.$this->certificat.'")' ;
            $resultats = $this->connexion->query($requete) ;
            
            return true ;
        } else {
            return false ;
        }
    }
    // ----- FIN Zone Méthodes
}
?>