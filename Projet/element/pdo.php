<?php

include "../header.php";

  test("title");


try{
  $pdo = new PDO("pgsql:host=localhost;dbname=ref","amandine","fille");
  print("Ok");
  print"rere";
  $requete = $pdo->prepare("select nom from book");
  if($requete){
    print"Requete";
  }else{
    print("Erreur");
  }
  $requete->execute();
  if($requete){
    print"Execute";
  }else{
    print("Erreur");
  }
  while($affiche = $requete->fetch()){
    print("<br/>".$affiche['nom']);
  }
  
  $pdo = null;
}
catch(PDOException $e){
  print("Erreur: ".$e->getMessage());
}

?>