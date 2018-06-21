<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Info Event</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/info.css" type="text/css"/>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" type="text/css"/>
</head>
<body>
<div class="boxInfo">
<?php

//include '../element/composant.php';
include '../element/connexion.php';


$is_Id_Events =$_GET['id'];
if(isset($is_Id_Events)){
   // $header = new Componsant();
   // $header->getHeaderInfo();

    $isInfo = new Connexion("Event");
    $isInfos=$isInfo->getAllElement("Select id, nom ,description, date_format(datevent,'%d/%m/%Y') as datevent, prix, time_format(heuredebut,'%H:%i') as heuredebut, time_format(heurefin,'%H:%i') as heurefin, image from event where id='".$is_Id_Events."'");
    foreach($isInfos as $element){
        print("<div class='infoevent'>");
        print("<div><img src='../images/".$element[image]."' class='picture'/></div>");
        print("<h5>Nom: </h5><p>".$element[nom]."</p>");
        print("<h5>Description: </h5> <p>".$element[description]."</p>");
        print("<h5>Date: </h5><p> ".$element[datevent]."</p>");
        print("<h5>Date debut: </h5><p> ".$element[heuredebut]."</p>");
        print("<h5>Date fin: </h5> <p> ".$element[heurefin]."</p>");
        print("<h5>Prix: </h5> <p> ".$element[prix]."&euro;</p>");
        print("<div><a  href='../events.php'>Back</a></div></div>");
    }
}
else {

    print("<h5>Error 404</h5>");
}

?>
</div>
  
</body>
</html>
