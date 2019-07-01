<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    /*#div{
      border:1px solid black;
   width:50%;
   height:200px;
    }*/
    #inputEmail3{
    width:60%; 
    opacity:0.5; 

  }
  #form1{
    border:0px solid black;
    width:60%;
    margin-top:50px;
    margin-left:300px;
  }
  
  #conn{
    margin-left:200px;
  }
  #email{
    font-size:20px;
    font-family:verdana;
  color:white
  } 
    #id td{
        font-size:30px;
      color:white;  
    }
     #t1 td{
        font-size:20px;
      color:white;  
    }
    #b1{
      width:100%;
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
/*nav{
    width:100%;
    background-color:#424228;
}*/
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
   text-decoration: none;
 
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

.jumbotron {
    background-color: grey;
    color: #fff;
    height:150px;

  }
  #b1 h1{
      font-size:50px;
      color:white;
      margin-top:-7px;
      width: 100%;
      font-family:verdana;

  }
  #b1 h4{
      font-size:10px;
      color:white;
      margin-top:-7px;
      width: 100%;

  }
  #b1{

  }
    </style>
</head>
<body>
<div class="jumbotron text-center" id="b1">

<em> <h1>CAMPUSEN</h1> </em>
<p> <em><h4>liste des étudiants</h4></em></p>

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
        <div>
        <p> <em><h1>Lister les étudiants selon un Statut</h1></em></p>

        <div id="form1">
<form id="form" action="findAll.php" method="POST">


  <div class="form-group row">
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="etudiant" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" id="conn" name="lister">LISTER</button>
    </div>
  </div>
  </div>
</form>
</div>
    <?php
include "EtudiantService.php";
include "etudiant.php";
$perso=new EtudiantService();
//$id=$_GET['matricule'];
if(isset($_POST['lister'])){
  if($_POST['etudiant']=="non_boursier"){
    echo "<center><h1>LISTE DES ETUDIANTS NON_BOURSIERS</h1></center>";
  echo"<center><table border='1' width='80%'>";
  echo "<tr id='id'>";
 echo "<td>matricule</td>";
  echo "<td>nom</td>";
  echo "<td>prenom</td>";
  echo "<td>email</td>";
  echo "<td>date_naissance</td>";
  echo "<td>adresse</td>";
  /*echo "<td>modifier</td>";
  echo "<td>supprimer</td>";*/

  echo"</tr>";
   foreach($perso->findAll('non_boursier') as $key=>$user) {
    $id=$user["id_etu"];

   echo "<tr id='t1'>";
    echo "<td>".$user['matricule'],'<br />'."</td>";
    echo "<td>".$user['nom'],'<br />'."</td>";
    echo "<td>".$user['prenom'],'<br />'."</td>";
    echo "<td>".$user['email'],'<br />'."</td>";
    echo "<td>".$user['date_naissance'],'<br />'."</td>";
    echo "<td>".$user['adresse'],'<br />'."</td>";
    /*echo "<td>","<a href='traitement.php?id=$id'>Modifier</a>",'<br />'."</td>";
    echo "<td><button id='b1'>","<a href='traitement.php?id=$id'>supprimer</a>",'<br />'."</button></td>";*/

   echo "</tr>";
  }
}
elseif($_POST['etudiant']=="boursier"){
  echo "<center><h1>LISTE DES ETUDIANTS BOURSIERS</h1></center>";
  echo"<center><table border='1' width='80%'>";
  echo "<tr id='id'>";
 echo "<td>matricule</td>";
  echo "<td>nom</td>";
  echo "<td>prenom</td>";
  echo "<td>email</td>";
  echo "<td>date_naissance</td>";
  echo "<td>id_type</td>";
  echo"</tr>";
   foreach($perso->findAll('boursier') as $key=>$user) {
    echo "<tr id='t1'>";
    echo "<td>".$user['matricule'],'<br />'."</td>";
    echo "<td>".$user['nom'],'<br />'."</td>";
    echo "<td>".$user['prenom'],'<br />'."</td>";
    echo "<td>".$user['email'],'<br />'."</td>";
    echo "<td>".$user['date_naissance'],'<br />'."</td>";
    echo "<td>".$user['id_type'],'<br />'."</td>";
   echo "</tr>";
  }
}elseif($_POST['etudiant']=="loyer"){
  echo "<center><h1>LISTE DES ETUDIANTS BOURSIER ET LOGER</h1></center>";
  echo"<center><table border='1' width='80%'>";
  echo "<tr id='id'>";
 echo "<td>matricule</td>";
  echo "<td>nom</td>";
  echo "<td>prenom</td>";
  echo "<td>email</td>";
  echo "<td>date_naissance</td>";
  echo "<td>id_chambre</td>";
  echo"</tr>";
   foreach($perso->findAll('loyer') as $key=>$user) {
    echo "<tr id='t1'>";
    echo "<td>".$user['matricule'],'<br />'."</td>";
    echo "<td>".$user['nom'],'<br />'."</td>";
    echo "<td>".$user['prenom'],'<br />'."</td>";
    echo "<td>".$user['email'],'<br />'."</td>";
    echo "<td>".$user['date_naissance'],'<br />'."</td>";
    echo "<td>".$user['id_chambre'],'<br />'."</td>";
   echo "</tr>";
  }
}
}  
echo "</table></center>";
    ?>
    
</body>
</html>