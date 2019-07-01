<?php

include "etudiant.php";
include "Nonboursier.php";
include "Boursier.php";
include "loyer.php";
include "EtudiantService.php";

$etudiantservice=new EtudiantService();

if (isset($_POST['inscrip'])) // Si on a voulu créer un personnage.
{
  $id_chambre=$_POST['d1'];
  
  $perso = new Loger($_POST['matricule'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['date'],$id_chambre); // On crée un nouveau personnage.

  $etudiantservice->add($perso);
  $perso1 = new Nonboursier($_POST['matricule'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['date'],$_POST['adresse']); // On crée un nouveau personnage.

  $etudiantservice->add($perso1);
  $perso2 = new Boursier($_POST['matricule'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['date'],$_POST['type1']); // On crée un nouveau personnage.

  $etudiantservice->add($perso2);

 echo "ajout réussit";
}

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
  
  h1{
    font-size:30px;
    text-align:center;
      
  }
  #nom3{
    width:60%;
    opacity:0.1; 

  }
  #inputEmail3{
    width:60%;
    opacity:0.1; 

  } 
  #inputPassword3{
    width:60%; 
   opacity:0.5; 
  }
  #adresse1{
    width:60%;
    opacity:0.5; 
 
    
  }
  #d1{
    width:50%;
    opacity:0.7; 
 
  }
  #batiment{
    width:60%; 
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
  
  
  nav{
   width: 100%;
   height: 70px;
   background-color: dimgrey;
   opacity: 0.7;
   margin-top:-32px;
}       
  nav > ul{
    margin:0px;
    padding:0px;
}
nav > ul::after{
content:"";
display:block;
clear:both;
}

nav > ul > li > a{
    padding:20px 20px;
    font-size:20px;
}
nav > ul > li{
    float:right;
    position:relative;
} 
nav li{
    list-style-type:none;
}
.menu{
    display:none;
}
nav a{
    display:inline-block;
    text-decoration:none;
}
nav li:hover .menu{
    display:inline-block;
    position:absolute;
    padding:0px;
    top:100%;
    left:0px;
    z-index:1000;
    
}
.menu li{
    border-bottom:0px solid;
}
.menu li a{
    padding:0px;
    font-size:20px;
    width:250px;

}
a{
   color: white;
}
h1{
   text-align:center;
   font-size:30px;
   color:white;
}

body{
   background-image:url(ap3.jpg);
   background-size:cover;
}

#b1 h1{
  font-size:50px;
  font-family:verdana;
}
#b1 h4{
      font-size:15px;
      color:white;
      margin-top:-7px;
      width: 100%;

  }
  #corp{
    border:0px solid black;
   width:100%;
   height:50px;
   margin-left:-250px;
  }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
     $('#input').click(function(){
         $('#f1, #type1').hide();
       });

       $('#input').click(function(){
         $('#type').show();
       });
});
$(document).ready(function(){
     $('#input1').click(function(){
         $('#type, #type1').hide();
       });

       $('#input1').click(function(){
         $('#f1').show();
       });
});
$(document).ready(function(){
     $('#input2').click(function(){
         $('#type, #f1').hide();
       });

       $('#input2').click(function(){
         $('#type1').show();
       });
});
</script>
</head>
<body>
<div class="jumbotron text-center" id="b1">

<em> <h1>CAMPUSEN</h1> </em>
<p> <em><h4>Page d'inscription</h4></em></p>

</div>
<nav>
<ul>
    
    <li><a href="#">Chambre & Batiment</a>

      <ul class="menu">
            <li><a href="form_chambre.php">Chambre</a></li>
            <li><a href="form_bat.php">Batiment</a></li>
            <li><a href="listerchambre.php">liste chambre</a></li>
        </ul>
   </li>
    <li><a href="#">Etudiant</a>
        <ul class="menu">
            <li><a href="addetudiant.php">inscription</a></li>
            <li><a href="find.php">find</a></li>
            <li><a href="findAll.php">findAll</a></li>
            <li><a href="checkStatut.php">checkStatut</a></li>
        </ul>
    </li> 
    <li><a href="index.php">Accueil</a></li> 
</ul>
</nav>

<div id="form1">
<form id="form" action="addetudiant.php" method="POST">


  <div class="form-group row">
    <label for="inputEmail3" id="email" class="col-sm-2 col-form-label">matricule</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="matricule" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" id="email" class="col-sm-2 col-form-label">nom</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="nom" placeholder="">
    </div>
    <label for="inputPassword3" id="adresse" class="col-sm-2 col-form-label">prenom</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  id="inputPassword3" name="prenom" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" id="adresse" class="col-sm-2 col-form-label"> émail</label>
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
  <div id="f1" style="display: none">
  <div class="form-group row">
    <label for="inputPassword3" id="adresse" class="col-sm-2 col-form-label">adresse</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  id="adresse1" name="adresse" placeholder="adresse">
    </div>
  </div>
  </div>
  <div style="display: none" id="type1">
  <div class="form-group row">
    <label for="batiment" id="adresse" class="col-sm-2 col-form-label">id_chambre</label>
   

            <?php
            echo "<select id='d1' name='d1'>" ;
            echo "<option></option>";
            $chambre=new EtudiantService();
            foreach($chambre->select('chambre') as $key=>$cb){
              echo "<option value=".$cb['id_chambre'].">".$cb['nom_chambre']."</option>";
            }
            echo "</select>" ;

            ?>
      

   
  </div>
  
 </div>
  <div style="display: none" id="type">
  <div class="form-group row">
    <label for="batiment" id="adresse" class="col-sm-2 col-form-label">type-bourse</label>
    
           <?php
          echo "<select id='d1' name='type1'>";
          echo "<option></option>";
            $type=new EtudiantService();
            foreach($type->select('type') as $key=>$val){
              echo "<option value=".$val['id_type'].">".$val['libelle']."</option>";
            }
            echo "<select>";
            ?>
  </div>
  </div>
  <div id="corp">

  <p id="p"><label for="boursier" id="label">Boursier</label>
<input type="radio" id="input" name="r">
<label for="nboursier" id="label">Nonboursier</label>
<input type="radio" id="input1" name="r">
<label for="nboursier" id="label">Loger</label>
<input type="radio" id="input2" name="r"></p>
</div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" id="conn" name="inscrip">ADD</button>
    </div>
  </div>
</form>
</div>
</div>


</body>
</html>