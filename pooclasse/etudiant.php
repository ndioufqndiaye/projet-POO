<?php

abstract class Etudiant{

    private $matricule;
    private $nom;
    private $prenom;
    private $email;
    private $date_naissance;
    

public function __construct($matricule,$nom,$prenom,$email,$date_naissance){
    $this->matricule=$matricule;
    $this->nom=$nom;
    $this->prenom=$prenom;
    $this->email=$email;
    $this->date_naissance=$date_naissance;
    

}


    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

    }
    
    public function getMatricule()
    {
        return $this->matricule;
    }

    

    
    public function setNom($nom)
    {
        $this->nom = $nom;

       
    }

    
    public function getNom()
    {
        return $this->nom;
    }

    
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        
    }

    
    public function getPrenom()
    {
        return $this->prenom;
    }

    
    public function setEmail($email)
    {
        $this->email = $email;

    }

 
    public function getEmail()
    {
        return $this->email;
    }

    
    public function setDate_naissance($date_naissance)
    {
        $this->date_naissance = $date_naissance;

    }

    
    public function getDate_naissance()
    {
        return $this->date_naissance;
    }

    
    public function setId_etu($id_etu)
    {
        $this->id_etu = $id_etu;

        
    }

    
    public function getId_etu()
    {
        return $this->id_etu;
    }

   
}