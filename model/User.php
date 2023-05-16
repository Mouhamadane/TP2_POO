<?php
class User  {
    // Atrributs
    protected $ID;
    protected $nom;
    protected $prenom;
    protected $MDP;
    protected $profil;

    public function __construct($row=null){
       if($row!=null){
        $this->hydrate($row);
       }
    }
    // redefinition
    public function hydrate($row){
        $this->ID = $row["id"];
        $this->prenom = $row["prenom"];
        $this->nom = $row["nom"];
        
    }

    public function Restauration(){

    }

    public function Affichage(){
        echo "User".$this->ID." ".$this->prenom." ".$this->nom;
    }

      // Getter
    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function getMDP(){
        return $this->MDP;
    }

    
    public function getID(){
     return $this->ID;
    }
    public function getprofile(){
        return $this->profil;
    }
   
    //Setter
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setPrenom($prenom){
        $this->nom = $prenom;
    }
    public function setMDP($nom){
        $this->nom = $nom;
    }
    public function setID($Id){
        $this->nom = $Id;
    }
    public function setProfil($profil){
        $this->profil = $profil;
    } 
    // fonction qui retourne le nom complet
    public function getNomComplet(){
        return $this->prenom." ".$this->nom;
    }
}