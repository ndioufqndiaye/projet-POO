<?php
//include "batiment.php";
include "EtudiantService.php";
include "batiment.php";
$etudiantservice=new EtudiantService();

if (isset($_POST['inscrip'])) // Si on a voulu créer un personnage.
{
  
  
  $bat= new Batiment($_POST['nom_batiment']); // On crée un nouveau personnage.

  $etudiantservice->batiment($bat);

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
    height:60px;

  }
     #t1 th{
      font-size:30px;
      color:white;
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
  h1{
    font-size:30px;
    text-align:center;
      
  }
  #nom3{
    width:50%;
  }
  #inputEmail3{
    width:50%;
  } 
  #inputPassword3{
    width:50%; 
  }
  #adresse1{
    width:50%; 
    
  }
  #d1{
    width:45%; 
  }
  #batiment{
    width:50%; 
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
    font-size: 30px;
  }
  
  body{
    background-image:url(ap3.jpg);
    background-repeat:none;
    background-size:cover;

  }
  h1{
    color:white;
  }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

</head>
<body>
<div class="jumbotron text-center" id="b1">

<em> <h1>CAMPUSEN</h1> </em>

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
<h1>Ajout de batiment</h1>
<div id="form1">
<form id="form" action="form_bat.php" method="POST">

<div class="form-group row">
    <label for="inputEmail3" id="email" class="col-sm-2 col-form-label">nom_batiment</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="nom_batiment" placeholder="">
    </div>
  </div>
  
 <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" id="conn" name="inscrip">ADD</button>
    </div>
  </div>
</form>
</div>



</body>
</html>