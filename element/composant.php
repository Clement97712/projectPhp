<?php

include 'connexion.php';

class Composant{

    function getHeader($images,$auteur){
        print("
        
        <div class=\"headers navbar-top-fixed\">
    <a href=\" index.php \">Vybz</a>
    <div class=\"navig\">
        <a href=\"events.php\">Event</a>
        <a href=\"addevents.php\">Add event</a>
        <a href=\"divers.php\">Remove Event</a>
    </div>
</div>

<img src=\"".$images. "\" alt=\"bon\" class=\"images\" />
<div class='boxsentence'>
        <p class='artiste'> Photo by ".$auteur." on Unsplash</p>
    </div>
        ");    
    }


    function getFooter(){
        print("<div class=\"footers\"></div>");
    }


    function getElement(){
    
            $connect = new Connexion("Event");
            $values =$connect->getAllElement("Select id,image,nom, date_format(datevent,'%d/%m/%Y') as datevent, time_format(heuredebut,'%H:%i') as heuredebut from event");
            foreach($values as $val){
                print("<div class='events'><div><p> # ".$val[id]."</p></div><div><img class='affiche' src='images/".$val[image]."'/></div><div><a href='controllers/info.php?id=".$val[id]."'>".$val[nom]."</a></div><div><p>".$val[datevent]."</p></div><div><p>  ".$val[heuredebut]."</p></div></div>");
            }
            $connect->getClose();
    
    
    
    }

}

?>