<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="bootstrap.min.css">
    <style>
           
  
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
<p> <em><h4>Page d'accueil</h4></em></p>

</div>
<div>

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
       <p> <em><h1>BIENVENUE SUR CAMPUSEN </h1></em></p>
       <p> <em><h1>LA PLATEFORME D'INSCRIPTION DES ETUDAINTS</h1></em></p>
       <p> <em><h1>ET D'ORIENTATION DES NOUVEAUX BACHELIERS</h1></em></p>



</body>
</html>