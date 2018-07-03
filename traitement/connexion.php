<?php

  class Connexion {

    private $table;


    function __construct(){

      try{
        $this->connexion = new PDO("pgsql:host=localhost;dbname=refs","amandine","fille");
      }
      catch(PDOException $e){

        print("<p>Erreur: ".$e->getMessage()."</p>");

      }
    }


    function nbrePages($param,$elements){
      $requete= $this->connexion->prepare("select count(*) as nbre from book");
      $requete->execute();
      $nbre_page=$requete->fetch();
      $nbre_page=ceil($nbre_page['nbre']/$elements);




      //print ("test".$nbre_page);
      $this->getElement("select * from book order by id asc limit 5 offset $param");
      print("
      <hr/>
      <div class='uk-flex uk-flex-center'>
      <div class=''><ul class='uk-pagination uk-flex-center' >");

      for($page=1;$page<=$nbre_page;$page++){
        print("
       <li> <a class='uk-button-text' style='color:black; font-size:20px;' href='events.php?page=".$page."'>".$page."</a>
    </li>"  );

      }
    print("</ul></div>");
    }


    function getElement($requete){
      $query = $this->connexion->prepare($requete);
      $query->execute();
      while($affiche=$query->fetch()){
       print('

      <hr class="uk-container"/>
       <div class=" uk-flex-middle uk-flex-center" uk-grid>

       <div class="uk-width-3-4@m">
          <h3>'.$affiche['nom'].'</h3>
           <p>'.$affiche['description'].'</p>
           <p>'.$affiche['dates'].'</p>
           <p>'.$affiche['prix'].' &euro;</p>
            <a href="update.php?action='.$affiche['id'].'">Update</a>
            <a style="color:red;" href="traitement/action.php?delete='.$affiche['id'].'">Delete</a>
           </div>
       <div class="uk-width-1-4@m uk-flex-first">
           <img  class="picture" src="'.$affiche['affiche'].'" alt="Image">

       </div>
   </div>');




        $this->connexion=null;
      }
    }



    function isUpdate($requete){

      $query=$this->connexion->prepare($requete);
      $query->execute();
      while($affiche=$query->fetch()){

        $table=$affiche;
      }
      return $table;
  }


    function isInsert($sql){

      $stmt = $this->connexion->prepare($sql);

      // pass values to the statement


      // execute the insert statement
      $stmt=$stmt->execute();
      if($stmt){
        print"Ok";
      }
      else{
        print "Nopre";
      }

      $this->connexion=null;
      print"<a href='../events.php'>Retour</a>";

    }





  function makeAction($requete){

      $isaction= $this->connexion->prepare($requete);
      print "</br>".$requete;
     $test= $isaction->execute();
      if($test){
        print"Ok";
      }
      else{
        print"Echec";
      }

       //echo $test->rowCount();

      header('Location: ../events.php');
  }

  }

?>
