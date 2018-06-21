<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="3;URL='../events.php'">
    <title>Add event</title>
</head>
<body>
    
</body>
</html>

<?php 
include '../element/connexion.php';


$nomEvent=$_POST['nom'];
$dateEvent = $_POST['date'];
$heureDebutEvent = $_POST['heuredebut'];
$heureFinEvent = $_POST['heurefin'];
$messageEvent = $_POST['message'];
$prixEvent = $_POST['prix'];
$imagesEvent = $_POST['images'];




print($nomEvent."</br>".$dateEvent."</br> ".$heureDebutEvent."</br>".$heureFinEvent."</br>".$messageEvent." </br>".$imagesEvent."</br> ".$prixEvent." euros</br></br>") ;
/*
if(isset($nomEvent) && isset($imagesEvent) ){
    print("Valeurs definit et not null");
}

print("INSERT INTO event('nom','description','datevent',
'heuredebut','heurefin','image','prix') VAlUES ('".$nomEvent."','".$messageEvent."','".$dateEvent."','"
.$heureDebutEvent."','".$heureFinEvent."','".$imagesEvent."','".$prixEvent."')");

include "../element/connexion.php";
*/

$isMessage="Nom event: ".$nomEvent."</br> Description event: "
.$messageEvent."</br> Image: ".$imagesEvent."<br/> Date event: ".$dateEvent.
"</br> Heure debut event: ".$heureDebutEvent."</br> Heure fin event: ".$heureFinEvent.
"<br/> Prix event: ".$prixEvent.".";

print $isMessage;

class AddEvent {

    function getAddEvent($requete){
        $connextion = new Connexion("Event","event");
        $connextion->getUpdateElement($requete);
    }

}

if(isset($nomEvent) && isset($dateEvent) && isset($heureDebutEvent) && isset($heureFinEvent) && isset($messageEvent) && isset($imagesEvent) && isset($prixEvent)){
$query = new AddEvent();
$requetes="INSERT INTO event(nom,description,datevent,
heuredebut,heurefin,image,prix) VAlUES ('".$nomEvent."','".$messageEvent."','".$dateEvent."','"
.$heureDebutEvent."','".$heureFinEvent."','".$imagesEvent."','".$prixEvent."')";
$query->getAddEvent($requetes);

$to      = 'mj.capou@gmail.com';
$subject = 'Add new event';
$message = $isMessage;
$headers = 'From: mj@cap.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


}

else{
    print("Erreur Veuillez verifier les informations");
}

?>