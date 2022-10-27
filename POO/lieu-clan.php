<?php
class LieuClan {
    // ----- Zone Paramètres 

    public $id;
    public $type;
    public $img;
    public $desc;
    public $titre;

    public $connexion ;
     // ----- FIN Zone Paramètres



    // ----- Constructeur

    public function __construct($id,$type){
        $this->connexion = new PDO('mysql:host=localhost;port=3306;dbname=sae301','root','') ; 

        if ($type == 0) {
            $requete = 'SELECT * FROM clan WHERE id_clan="'.$id.'"' ;
        } else {
            $requete = 'SELECT * FROM lieu WHERE id_lieu="'.$id.'"' ;
        }
        
        $resultats = $this->connexion->query($requete) ;
        $tableau = $resultats->fetchAll() ;

        $this->id = $id;
        $this->type = $type;
        $this->img = $tableau[0]["img"];
        $this->desc = $tableau[0]["description"];
        $this->titre = $tableau[0]["titre"]; 
    }
    

    // ----- FIN Constructeur



    // ----- Zone Méthodes 

    public function Afficher(){
        echo "<div class='afficher'>" ;
        echo "<h3>".$this->titre."</h3>" ;
        echo "<div class='affimage'>";
        echo "<img src='".anchored_link("Illustrations/".$this->img)."' alt=''>";
        echo "<div class='texte'>";
        echo "<p>".$this->desc."</p>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }

    public function AfficherAdmin() {
        echo '<form enctype="multipart/form-data" action="" method="post">';
        echo "<label for='id'>ID : </label><input type='number' value='".$this->id."' name='id' readonly><br>";
        echo "<label for='titre'>Titre : </label><input type='text' value='".$this->titre."' name='titre'><br>";
        echo '<img src="'.anchored_link("Illustrations/".$this->img).'" alt=""><br>';
        echo '<input type="hidden" name="MAX_FILE_SIZE" value="300000" />';
        echo "<label for='img'>Changer l'image : </label><input type='file' name='img'><br>";
        echo "<label for='desc'> Description : </label><input type='text' value='".$this->desc."' name='desc'><br>";
        echo '<input type="submit" value="Modifier les données" name="envoi">';
        echo '</form>';
    }

    public function modifier($donnees){
        if ($this->type == 0) {
            $requete = 'UPDATE clan SET titre = "'.$donnees["titre"].'", description = "'.$donnees["desc"].'", img ="Clans/'.$_FILES['img']['name'].'" WHERE id_clan = '.$this->id ;
        } else {
            $requete = 'UPDATE lieu SET titre = "'.$donnees["titre"].'", description = "'.$donnees["desc"].'", img ="Lieux/'.$_FILES['img']['name'].'" WHERE id_lieu = '.$this->id ;
        }

        $this->connexion->query($requete) ;

        if ($this->type == 0) {
            $this->img = "Clans/".$_FILES['img']['name'];
        } else {
            $this->img = "Lieux/".$_FILES['img']['name'];
        }

        $this->desc = $donnees["desc"];
        $this->titre = $donnees["titre"];
        if ($this->type == 0) {
            move_uploaded_file($_FILES['img']['tmp_name'], anchored_link('Illustrations/Clans/').basename($_FILES['img']['name']));
        } else {
            move_uploaded_file($_FILES['img']['tmp_name'], anchored_link('Illustrations/Lieux/').basename($_FILES['img']['name']));
        }
        
    }

    // ----- FIN Zone Méthodes
}
?>