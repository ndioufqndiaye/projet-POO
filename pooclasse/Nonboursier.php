<?php
class Nonboursier extends Etudiant{

    private $adresse;
    public function __construct($matricule,$nom,$prenom,$email,$date_naissance,$adresse)
    {
        parent::__construct($matricule,$nom,$prenom,$email,$date_naissance);
        $this->adresse=$adresse;

    }

    
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        
    }

    
    public function getAdresse()
    {
        return $this->adresse;
    }

   
}