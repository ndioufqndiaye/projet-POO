<?php
/*require "etudiantservise.php";
require "etudiant.php";*/
try{
$connexion = new PDO('mysql:host=localhost;dbname=bdonnee', 'root', 'passer123');
$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échoué.
/*$insertion="INSERT INTO `etudiant` (`id_etu`, `matricule`, `nom`, `prenom`, `email`, `date_naissance`) 
    VALUES (NULL, 'b123','beye', 'bass', 'jhgfsdfgh', '2010-02-14');";
    $connexion->exec($insertion);
    echo "insertion réusit";*/
}
catch(PDOException $p){
echo "Echec : " .$p->getMessage();
}
/*$etudiantservice=new EtudiantService($connexion);

if (isset($_POST['inscrip'])) // Si on a voulu créer un personnage.
{

  $perso = new Etudiant($_POST['matricule'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['date']); // On crée un nouveau personnage.

  $etudiantservice->add($perso);
 
  echo $etudiantservice;
}*/