<?php

class Boursier extends Etudiant{
   protected $type;

    public function __construct($matricule,$nom,$prenom,$email,$date_naissance,$type=""){

         parent::__construct($matricule,$nom,$prenom,$email,$date_naissance);
          $this->type = $type;
    }
     
   public function setType($type)
   {
      $this->type = $type;

      return $this;
   }

   
   public function getType()
   {
      return $this->type;
   }
}