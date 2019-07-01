<?php

class Chambre{

   
    private $nom_chambre;
    private $id_bat;

    public function __construct($nom_chambre,$id_bat){
        
        
        $this->id_bat=$id_bat;
        $this->nom_chambre=$nom_chambre;

    }

    
    public function setNom_chambre($nom_chambre)
    {
        $this->nom_chambre = $nom_chambre;

        
    }

    
    public function getNom_chambre()
    {
        return $this->nom_chambre;
    }

    
    public function setId_bat($id_bat)
    {
        $this->id_bat = $id_bat;

       
    }

    
    public function getId_bat()
    {
        return $this->id_bat;
    }
}