<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/addevents.css" type="text/css" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
    <title>Add events</title>
</head>

<body>

<?php 
    include 'element/composant.php'; 
    $header = new Composant();
    $header->getHeader("images/Jumbotron.jpg","Nainoa Shizuru");
?>
    <div class="boites">


        <div class="title">
            <h2>Add event</h2>
        </div>

        <div class="dimensiondata">

            <form method="POST" action="controllers/addevents.php">
                <div class="form-group">
                    <label for="">Nom: </label>
                    <input type="text" class="form-control" id="" placeholder="Nom Event" required name="nom">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Date: </label>
                    <input type="date" class="form-control" id="" placeholder="Date events" required name="date"/>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Heure debut: </label>
                    <input type="time" class="form-control" id="" placeholder="Date events" required name="heuredebut"/>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Heure Fin: </label>
                    <input type="time" class="form-control" id="" placeholder="Date events" required name="heurefin"/>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Prix: </label>
                    <input type="text" class="form-control" id="" placeholder="Prix Event" required name="prix"/>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Description: </label>
                    <textarea class="form-control comment" id="" rows="5" placeholder="Date events" required name="message"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Image: </label>
                    <input type="file" class="form-control-file" id="" required name="images">
                </div>
                <div class="addevent">
                    <input type="submit" class="btn btn-default" value="Send" />
                    <input type="reset" class="btn btn-default" value="Reset" />
                </div>
            </form>
        </div>

    </div>

    <?php
    $header->getFooter();

?>