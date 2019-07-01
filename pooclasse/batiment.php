<?php

class Batiment{

   
    private $nom_batiment;

    public function __construct($nom_batiment){
        
        
        
        $this->nom_batiment=$nom_batiment;

    }

    
    public function setNom_batiment($nom_batiment)
    {
        $this->nom_batiment = $nom_batiment;

        
    }

    
    public function getNom_batiment()
    {
        return $this->nom_batiment;
    }


}