<?php
class  Etudiant extends User {
    // Atrributs
    protected $class;
    
    // contructeur
    public function __construct($row=null){
        $this->profil = "Etudiant";
        if($row!=null){
            $this->hydrate($row);
            $this->class = $row["class"];
        }
    }

    // redifinition
    public function setProfil($nom){
        
    }
    

}