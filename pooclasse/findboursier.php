<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<form id="form" action="findboursier.php" method="POST">


  <div class="form-group row">
    <label for="inputEmail3" id="email" class="col-sm-2 col-form-label">etudiant</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="etu" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" id="conn" name="lister">LISTER</button>
    </div>
  </div>
</form>
  <?php
  include "EtudiantService.php";
  $article=new EtudiantService();
  if(isset($_POST['lister']))
{
  echo "<center><h1>LISTER UN ETUDIANT</h1></center>";
  echo"<center><table border='1' width='80%'>";
  echo "<tr id='id'>";
 echo "<td>matricule</td>";
  echo "<td>nom</td>";
  echo "<td>prenom</td>";
  echo "<td>email</td>";
  echo "<td>date_naissance</td>";
  echo "<td>id_type</td>";

  echo"</tr>";

foreach($article->find('boursier',$_POST['etu']) as $key=>$objet){
  echo "<tr id='t1'>";
  echo "<td>".$objet["matricule"],'<br />'."</td>";
  echo "<td>".$objet["nom"],'<br />'."</td>";
  echo "<td>".$objet['prenom'],'<br />'."</td>";
  echo "<td>".$objet["email"],'<br />'."</td>";
  echo "<td>".$objet["date_naissance"],'<br />'."</td>";
  echo "<td>".$objet["id_type"],'<br />'."</td>";

 echo "</tr>";


}
}
echo "</table></center>";
  ?>
</body>
</html>