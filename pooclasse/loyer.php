<?php

class Loger extends Boursier{
protected $id_chambre;
protected $id_boursier;
public function __construct($matricule,$nom,$prenom,$email,$date_naissance,$id_chambre="",$id_boursier="")
{
    parent::__construct($matricule,$nom,$prenom,$email,$date_naissance,$type="");
    $this->id_chambre = $id_chambre;

}


public function setId_chambre($id_chambre)
{
$this->id_chambre = $id_chambre;

}


public function getId_chambre()
{
return $this->id_chambre;
}


public function getId_boursier()
{
return $this->id_boursier;
}


public function setId_boursier($id_boursier)
{
$this->id_boursier = $id_boursier;

return $this;
}
}