<?php
class Personne{
    private $nom;
    private $prenom;
    private $te;
   private $tab=array();
    public function __construct($nom,$prenom,$te){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->te=$te;
        $tab=[];
    }
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of te
     *
     * @return  self
     */ 
    public function setTe($te)
    {
        $this->te = $te;

        return $this;
    }

    /**
     * Get the value of te
     */ 
    public function getTe()
    {
        return $this->te;
    }
    public function addpersonne(Personne $perso){
        return $this->tab[]=$perso;
    }
    
}
$perso=new personne("gaye","fa","774152365");

//var_dump($perso);
echo $perso->getNom(). ", ".$perso->getPrenom(). ", ".$perso->getTe();
      