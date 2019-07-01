<?php
/*require_once "etudiantservise.php";
//include "etudiant.php";
$b= new EtudiantService("x123","ndio","abc","n@gmail.com","2015-02-12");
echo $b;
//var_dump($b);*/
include "EtudiantService.php";
include "etudiant.php";
$perso=new EtudiantService();

   foreach($perso->findAll('type') as $key=>$user) {
      echo $user['id_type'],'<br />';
   }
?> 