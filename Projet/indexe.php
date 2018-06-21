<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Vybz</title>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/index.css" type="text/css"/>
</head>

<body>
    <?php
        include "element/composant.php";
        $header = new Composant();
        $header->getHeader("images/jesse_darland.jpg","Jesse Darland");
    ?>


    <div class="boites">
       <div class="title">
           <h2>Accueil</h2>
        </div>
        
        <div class="indBox">
            <p>Bienvenu sur Vybz</p>
            <p>Nous vous offrons des concerts, des spectacles de haut niveau. </p>
            <p>Alors choisi les evenements qui vont marquer ta vie.</p>
        </div>
    
    </div>



    <?php 
        $header->getFooter();
    ?>
</body>

</html>