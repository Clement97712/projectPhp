<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/events.css" type="text/css" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
    <title>List events</title>
</head>

<body>
    <?php
        include 'element/composant.php';
       // include 'controllers/events.php';
        $header = new Composant();
        $header->getHeader("images/jumbotron.jpg","Samuel Zeller");
    ?>


        <div class="boites">
            <div class="title">
                <h2>Liste Evenements</h2>
            </div>
            <div class="events">
                <div>
                    <p>Id: </p>
                </div>
                <div>
                    <p>Affiche: </p>
                </div>
                <div>
                    <p>Nom: </p>
                </div>
                <div>
                    <p>Date:</p>
                </div>
                <div>
                    <p>Heure: </p>
                </div>
            </div>
            <div class="listevents">
                <?php 

                   // $isListEvents = new Events();
                   // $isListEvents->getAllEvent();
                    $header->getElement();
                ?>
            </div>
        </div>

<div class="footers"></div>
</body>

</html>