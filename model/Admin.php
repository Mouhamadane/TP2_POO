<?php
class  Admin extends User{
    // Atrributs
    public function __construct($row=null){
        $this->profil = "Admin";
        if($row!=null){
            $this->hydrate($row);
        }
    }
    
    //redéfinition
    public function setProfil($profil){

    }    
   
}