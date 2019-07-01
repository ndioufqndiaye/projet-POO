<?php

include "etudiant.php";
include "Nonboursier.php";
include "Boursier.php";
include "loyer.php";
include "EtudiantService.php";

$etudiantservice=new EtudiantService();

if (isset($_POST['inscrip'])) // Si on a voulu créer un personnage.
{
  

  $objet = new Nonboursier($_POST['matricule'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['date'],$_POST['adresse']); // On crée un nouveau personnage.

  $etudiantservice->update($objet);
  
 echo "modification réussit";
}
?>
<?php
  /*include "EtudiantService.php";
  $article=new EtudiantService();
 

foreach($article->find('etudiant',$_POST['etu']) as $key=>$objet){
  echo "<tr id='t1'>";
  echo "<td>".$objet["matricule"],'<br />'."</td>";
  echo "<td>".$objet["nom"],'<br />'."</td>";
  echo "<td>".$objet['prenom'],'<br />'."</td>";
  echo "<td>".$objet["email"],'<br />'."</td>";
  echo "<td>".$objet["date_naissance"],'<br />'."</td>";
 echo "</tr>";


}*/
?>

<!DOCTYPE html>
<html>
<head>
<title>Inscription etudiant</title>
<meta charget="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
crossorigin="anonymous">
  <style>
  .jumbotron {
    background-color: grey;
    color: #fff;
    height:30px;
  }
  #b1 h1{
      font-size:50px;
      color:white;
      margin-top:-40px;
  }
     #t1 th{
      font-size:30px;
      color:white;
  }
  nav #paysage{
    width: 100px;
    height: 70px;
}
 
 nav ul{
     float: right;
    margin-right: 20px;
}
nav  li  {
    display: inline-block;
    list-style-type: none;
    
}
nav ul li a{
    text-decoration: none;
    padding: 20px;
    color:darkgoldenrod;
    font-size: 20px;
}
nav ul li a.sb{
    background: burlywood;
    border-radius: 1px;
    height: 10px;
}
nav{
    width: 100%;
    height: 70px;
    background-color:white;
    opacity: 0.6;
}
  h1{
    font-size:30px;
    text-align:center;
      
  }
  #nom3{
    width:50%;
    opacity:0.3; 

  }
  #inputEmail3{
    width:50%;
    opacity:0.3; 

  } 
  #inputPassword3{
    width:50%; 
   opacity:0.3; 
  }
  #adresse1{
    width:50%;
    opacity:0.3; 
 
    
  }
  #d1{
    width:45%;
    opacity:0.3; 
 
  }
  #batiment{
    width:50%; 
    opacity:0.3; 

  }
  #nom1,#email,#pass,#adresse,#chambre{
    font-size:20px;
    font-family:verdana;
  color:white
  } 
  #form1{
    border:0px solid black;
    width:60%;
    margin-top:50px;
    margin-left:300px;
  }
  #form input{
    background-color:white;
    opacity: 0.8;
  }
  #conn{
    margin-left:200px;
  }
  #p1{
    margin-left:80px;
  }
  #p{
    margin-left:400px;
  }
  #p #label{
    color:white;
    font-size: 20px;
  }
  
  body{
    background-image:url(ap3.jpg);
    background-repeat:none;
    background-size:cover;

  }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

</head>
<body>


<div id="form1">
<form id="form" action="findAll.php" method="POST">


<div class="form-group row">
         <label for="inputEmail3" id="email" class="col-sm-2 col-form-label">matricule</label>
    <div class="col-sm-10">
         <input type="text" value="" class="form-control" id="inputEmail3" name="matricule" placeholder="">
    </div>
</div>

<div class="form-group row">
         <label for="inputEmail3" id="email" class="col-sm-2 col-form-label">nom</label>
    <div class="col-sm-10">
         <input type="text" class="form-control" id="inputEmail3" name="nom" placeholder="">
    </div>
</div>

<div>
           <label for="inputPassword3" id="adresse" class="col-sm-2 col-form-label">prenom</label>
    <div class="col-sm-10">
          <input type="text" class="form-control"  id="inputPassword3" name="prenom" placeholder="">
    </div>
</div>

<div class="form-group row">
       <label for="inputPassword3" id="adresse" class="col-sm-2 col-form-label">adresse émail</label>
    <div class="col-sm-10">
        <input type="email" class="form-control"  id="inputPassword3" name="email" placeholder="">
    </div>
</div>

<div class="form-group row">
       <label for="inputPassword3" id="adresse" class="col-sm-2 col-form-label">date_naissance</label>
    <div class="col-sm-10">
       <input type="date" class="form-control"  id="inputPassword3" name="date" placeholder="">
    </div>
</div>

<div class="form-group row">
          <label for="inputPassword3" id="adresse" class="col-sm-2 col-form-label">adresse</label>
    <div class="col-sm-10">
         <input type="text" value="" class="form-control"  id="adresse1" name="adresse" placeholder="adresse">
    </div>
</div>
  
  
  
<div class="form-group row">
    <div class="col-sm-10">
        <button type="submit" class="btn btn-primary" id="conn" name="inscrip">Modifier</button>
    </div>
</div>

</form>
</div>
</div>


</body>
</html>