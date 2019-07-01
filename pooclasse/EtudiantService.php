<?php

class EtudiantService{

          private $dbname;
          private $user;
          private $pwd;
          private $host;
          private $connexion;

 public function __construct($dbname='bdonnee',$user='root',$pwd='passer123',$host='localhost')
 {
                $this->dbname=$dbname;
                $this->user=$user;
                $this->pwd=$pwd;
                $this->host=$host;
 }
 public function connexion(){

             try
            {

                    $connexion= new PDO('mysql:host=localhost;dbname=bdonnee', 'root', 'passer123');
                     $this->connexion=$connexion;
            }
            catch (Exception $e)
            {
            
                  die('Erreur : ' . $e->getMessage());
            
            }
                 return $this->connexion;
}
  
public function chambre(chambre $home){

                $nom_chambre=$home->getNom_chambre();
                $id_bat=$home->getId_bat();


                $q=$this->connexion()->prepare("INSERT INTO chambre (nom_chambre,id_bat) 
                VALUES (:nom_chambre,:id_bat)");

                $q->execute(array('nom_chambre'=>$nom_chambre,'id_bat'=>$id_bat));

}

public function batiment(Batiment $bat){

                $nom_batiment=$bat->getNom_batiment();
                $q=$this->connexion()->prepare("INSERT INTO batiment (nom_bat) 
                VALUES (:nom_bat)");
                $q->execute(array('nom_bat'=>$nom_batiment));

}


public function add(Etudiant $perso){


                $matricule=$perso->getMatricule();
                $nom=$perso->getNom();
                $prenom=$perso->getPrenom();
                $email=$perso->getEmail();
                $date=$perso->getDate_naissance();

                $q=$this->connexion()->prepare("INSERT INTO etudiant (matricule,nom,prenom,email,date_naissance) 
                VALUES (:matricule,:nom,:prenom,:email,:date_nais)");

                $q->execute(array('matricule'=>$matricule,'nom'=>$nom,'prenom'=>$prenom,'email'=>$email,'date_nais'=>$date));

                $q =$this->connexion()->query("SELECT MAX(id_etu) AS id_etu FROM etudiant ");
                //echo $q;
                while ($donnees = $q->fetch()){
                
                  $id=$donnees['id_etu'];
                 // echo $id;
                }

                if(get_class($perso)=="Nonboursier"){

                  $adresse=$perso->getAdresse();

                  $q= $this->connexion()->prepare("INSERT INTO `non_boursier` (`id_etu`, `adresse`)  
                    VALUES (:id_etu,:adresse)");

                    $q->execute(array('id_etu'=>$id,'adresse'=>$adresse));
                    //var_dump($q);

                }else if(get_class($perso)=="Boursier"){

                  $type=$perso->getType();
                //var_dump ($type);
                  $q=$this->connexion()->prepare("INSERT INTO boursier (id_etu, id_type)  
                    VALUES (:id_etu,:id_type)");
                  $q->execute(array('id_etu'=>$id,'id_type'=>$type));
                  
                  
                }elseif(get_class($perso)=="Loger"){
                  $chambre=$perso->getId_chambre();
                  $q=$this->connexion()->prepare("INSERT INTO loyer (id_boursier, id_chambre)  
                  VALUES (:id_boursier,:id_chambre)");
                $q->execute(array('id_boursier'=>$id,'id_chambre'=>$chambre));
                
                }
                  }  
public function select($selec){
                    $se = $this->connexion()->query("SELECT * FROM $selec");

                      return $se->fetchAll(PDO::FETCH_ASSOC);
                  }
public function findAll($table){
    
                    if($table=="boursier"){
                    $req = $this->connexion()->query("SELECT * FROM $table,etudiant WHERE boursier.id_etu=etudiant.id_etu");
                  }elseif($table=="non_boursier"){
                    $req = $this->connexion()->query("SELECT * FROM $table,etudiant WHERE non_boursier.id_etu=etudiant.id_etu");
                
                  }elseif($table=="loyer"){
                    $req = $this->connexion()->query("SELECT * FROM $table,etudiant WHERE etudiant.id_etu=loyer.id_boursier");
                
                  }
                    return $req->fetchAll(PDO::FETCH_ASSOC);
}
public function find($table, $matri)
{

                    if($table=='etudiant'){
                      $requete="SELECT * FROM $table  WHERE matricule= :matri";
                    }elseif($table=="boursier"){
                      $requete="SELECT * FROM $table ,etudiant WHERE matricule= :matri AND etudiant.id_etu=boursier.id_etu";
                
                    }
                    elseif($table=="non_boursier"){
                      $requete="SELECT * FROM $table ,etudiant WHERE matricule= :matri AND etudiant.id_etu=non_boursier.id_etu";
                
                    }
                    elseif($table=="loyer"){
                      $requete="SELECT * FROM $table ,etudiant WHERE matricule= :matri AND etudiant.id_etu=loyer.id_etu";
                
                    }
                      $resultat=$this->connexion()->prepare($requete);
                      $resultat->bindValue(':matri',$matri,PDO::PARAM_STR);
                      $resultat->execute();
                      $ligne=$resultat->fetchall(PDO::FETCH_ASSOC);
                      //var_dump($ligne);
                      return $ligne;
                      $resultat->closeCursor();
}
public function update(Nonboursier $objet){
                $matricule=$perso->getMatricule();
                $nom=$perso->getNom();
                $prenom=$perso->getPrenom();
                $email=$perso->getEmail();
                $date=$perso->getDate_naissance();
                $adresse=$perso->getAdresse();

                    $bdd = $this->connexion();
                    $query = "UPDATE non_boursier SET matricule = :matricule,nom= :nom,prenom= :prenom,email= :email,date_naissance= :date_naissance,adresse= :adresse where id_etu =" .$id;
                    $req = $bdd->prepare($query);
                    $req->execute(array('matricule'=>$matricule,'nom'=>$nom,'prenom'=>$prenom,'email'=>$email,'date_naissance'=>$date,'adresse'=>$adresse));
}
/*public function listerchambre($table, $batiment){
         
                      //if($table=='chambre'){
                     $requete = $this->connexion()->query("SELECT * FROM $table WHERE $batiment AND batiment.id_bat=chambre.id_bat");
                    //}    
                      $res=$this->connexion()->prepare($requete);
                      //$res->bindValue(':nom_bat',$batiment,PDO::PARAM_STR);
                      $res->execute();
                      $ligne=$res->fetchall(PDO::FETCH_ASSOC);
                      //var_dump($ligne);
                      return $ligne;
                      $res->closeCursor();
                    }*/
}

