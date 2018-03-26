<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="3;URL='../events.php'">
    <title>Action events</title>
</head>
<body>
    
</body>
</html>



<?php

include '../element/connexion.php';

$isDeleteEvent =$_POST['id'];
$isIdevent = $_POST['idevent'];
$isModify =$_POST['messagemodif'];
$isChampsModif=$_POST['choix'];


$isChoix =$_POST['choix'];
$isComment =$_POST['messagemodif'];
$isIdEvent =$_POST['idevent'];

print($isChoix);
$isQuery= "UPDATE event set ".$isChoix."='".$isComment."' where id='".$isIdEvent."'";

print($isQuery);

class Action{

    function getAction($requete){
        $isAction = new Connexion("Event");
        $isAction->getUpdateElement($requete);
    }


}
/*
if(isset($isChoix) && isset($isComment) && isset($isIdEvent)){
    $query = new AddEvent();
    $requete="UPDATE event set ".$isChoix."='".$isComment."' where id='".$isIdEvent."'";
    $query->getAddEvent($requete);
}
*/

if(isset($isChoix) && isset($isComment) && isset($isIdEvent)){
    $isQuery= "Update event set ".$isChoix."='".$isComment."' where id='".$isIdEvent."'";
    $isUpdate = new Action();
    $isUpdate->getAction($isQuery);
}


if(isset($isDeleteEvent)){
    print("Event: ".$isDeleteEvent);
    $isQuery="Delete from event where id='".$isDeleteEvent."'";
    $isUpdate = new Action();
    $isUpdate->getAction($isQuery);
}




?>