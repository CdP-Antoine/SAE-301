<?php
class Client {
    // ----- Zone Paramètres
    public $id;
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
    public function __construct($id,$n,$p,$m,$a,$f,$pr,$c){
        $this->connexion = new PDO('mysql:host=localhost;port=3306;dbname=sae301','root','') ; 

        $this->id = $id;
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
        echo("ID : ".$this->id."<br>");
        echo("Prenom : ".$this->prenom. "<br>");
        echo("Nom : ".$this->nom. "<br>");
        echo("Mail :".$this->mail. "<br>");
        echo("Age : ".$this->age. "<br>");
        echo("Faction : ".$this->faction. "<br>");
        echo("Pro :".$this->pro. "<br>");
        echo("Certificat : ".$this->certificat. "<br>");
    }

    public function AfficherAdmin(){
        echo '<form action="" method="GET">';
        echo("<label for='id'>ID : </label><input type='number' value='".$this->id."' name='id' readonly><br>");
        echo("<label for='prenom'>Prénom : </label><input type='text' value='".$this->prenom. "' name='prenom'><br>");
        echo("<label for='nom'>Nom : </label><input type='text' value='".$this->nom. "' name='nom'><br>");
        echo("<label for='mail'>Mail : </label><input type='text' value='".$this->mail. "' name='mail'><br>");
        echo("<label for='age'>Age : </label><input type='text' value='".$this->age. "' name='age'><br>");
        echo("<label for='faction'>Faction : </label><input type='text' value='".$this->faction. "' name='faction'><br>");
        echo("<label for='pro'>Pro : </label><input type='text' value='".$this->pro. "' name='pro'><br>");
        echo("<label for='certificat'>Certificat : </label><input type='text' value='".$this->certificat. "' name='certificat'><br>");
        echo '<input type="submit" value="Modifier les données" name="envoi">';
        echo '</form>';
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

    public function Modifier($donnees) {
        $requete = 'UPDATE participant SET nom = "'.$donnees["nom"].'", prenom = "'.$donnees["prenom"].'", mail ="'.$donnees["mail"].'", age = "'.$donnees["age"].'", pro = "'.$donnees["pro"].'", id_clan = "'.$donnees["faction"].'", certificat = "'.$donnees["certificat"].'" WHERE id_participant = '.$this->id ;
        $this->connexion->query($requete) ;

        $this->nom = $donnees["nom"];
        $this->prenom = $donnees["prenom"];
        $this->mail = $donnees["mail"];
        $this->age = $donnees["age"];
        $this->faction = $donnees["faction"];
        $this->pro = $donnees["pro"];
        $this->certificat = $donnees["certificat"];
    }
    // ----- FIN Zone Méthodes
}
?>