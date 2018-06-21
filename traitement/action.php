<?php

include "connexion.php";


//Delete



$nom=$_POST['name'];
$description=$_POST['description'];
$dates=$_POST['dates'];
$affiche=$_POST['images'];
$price=$_POST['prix'];
$times=$_POST['time'];
$id= $_POST['id_book'];

// verifier que c'est nbienun interger
// is_float

$nbre = is_integer();

if(isset($_GET['delete'])){
  $connect = new Connexion();
  $requete = "delete from book where id='".$_GET['delete']."'";
  connect($requete);
}
else if(isset($id)){
$requete = "update book set nom='". $nom."', description='".$description."', dates='".$dates."', heure='".$times."', affiche='".$affiche."', prix='".$price."' where id='".$id."'";
connect($requete);
}
else{
  $con = new Connexion();
  $con->isInsert();
}

  function connect($requete){
  $connect = new Connexion();
  print $requete;
  $connect->makeAction($requete);
  }
?>



