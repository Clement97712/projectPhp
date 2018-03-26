<?php
include '../element/connexion.php';

class Events {

    function getAllEvent(){
        $events = new Connexion("Event","event");
        $value=$events->getAllElement("Select * from event");
        foreach($value as $val){
            print("<div class='events'><div><p> # ".
            $val[id]."</p></div><div><img class='affiche' src='images/".$val[image].
            "'/></div><div><a href='#'>".$val[nom]."</a></div></div>");
        }
    
    }

}

?>


