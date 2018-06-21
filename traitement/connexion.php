<?php

  class Connexion {

    private $table;


    function __construct(){

      try{
        $this->connexion = new PDO("pgsql:host=localhost;dbname=ref","amandine","fille");
      }
      catch(PDOException $e){

        print("Erreur: ".$e->getMessage());

      }
    }
  
  
    function nbrePages($param,$elements){
      $requete= $this->connexion->prepare("select count(*) as nbre from book");
      $requete->execute();
      $nbre_page=$requete->fetch();
      $nbre_page=ceil($nbre_page['nbre']/$elements);

     


      //print ("test".$nbre_page);
      $this->getElement("select * from book order by id asc limit 3 offset $param");
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
          <div class="uk-flex uk-flex-between uk-width-auto@s" style="width:290px;">
           <a href="update.php?action='.$affiche['id'].'"class="uk-button uk-button-primary uk-width-auto">Update</a>
           <a href="traitement/action.php?delete='.$affiche['id'].'" class="uk-button uk-button-danger">Delete</a>
        </div>
           </div>
       <div class="uk-width-1-4@m uk-flex-first">
           <img src="'.$affiche['affiche'].'" alt="Image">
       
       </div>
   </div>');

        


        
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
    

    function isInsert(){
      $sql = 'INSERT INTO book(nom,heure) VALUES(:symbol,:company)';
      $stmt = $this->connexion->prepare($sql);
      
      // pass values to the statement
      $stmt->bindValue(':symbol', 'Espagne');
      $stmt->bindValue(':company', "12:30");
      
      // execute the insert statement
      $stmt->execute();
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
