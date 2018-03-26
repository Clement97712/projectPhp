<?php



class Connexion {

    private $dbname;

    function __construct($nomdb){
       try{ 
            $this->dbname= new PDO("mysql:host=127.0.0.1;dbname=".$nomdb,"root","");
            $this->tablename=$nomtable;
        }
        catch(PDOException $e){
            print("Erreur: ".$e->getMessage());
        }

    }
/*
    function getRequete($requete){
            $query =$this->dbname->query($requete);
            $query->execute();
            return $query->fetch();
           // return $affiches;
    }

*/
    function getRequete2($requete){
        $table = array();
        $query =$this->dbname->prepare($requete);
        $query->execute();
        while($affiche= $query->fetch(PDO::FETCH_ASSOC)){
            
            $table[]=$affiche;
        }
        return $table;
        $this->dbname->close();
    }


    function getClose(){
        $this->dbname->close();
    }

//Retourne tous les elements


    function getAllElement($requete){
        $table = array();
        $query =$this->dbname->prepare($requete);
        $query->execute();
        while($affiche= $query->fetch(PDO::FETCH_ASSOC)){
            $table[]=$affiche;
        }
        return $table;
        $this->dbname->closeCursor();

    }

//Mise a jour des elements
    
    function getUpdateElement($requete){
        $query=$this->dbname->prepare($requete);
        $query->execute();
        $this->dbname->close();
    }

// function unitile (Supprime element) 

    function getAction($requete){
        $query=$this->dbname->prepare($requete);
        $query->execute();
        $this->dbname->close();
    }


}

?>