<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/divers.css" type="text/css" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
    <title>Delete or change events</title>
</head>

<body>
    <?php
        include 'element/composant.php';
      
        $header = new Composant();
        $header->getHeader("images/wesley_tingey.jpg","Wesley Tingey");
    ?>

<div class="boites">
        <div class="title">
            <h2>Modify or delete events</h2>
        </div>


        <div class="boxoffice">
        
            <div class="style">
                <form method="POST" action="controllers/divers.php">
                <div class="form-group">
                    <label>Remove event: </label>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Id event </label>
                    <input type="number" class="form-control" min="1" value="1" max="15" required name="id">
                </div>
                <div class="addevent">
                    <input type="submit" class="btn btn-default" value="Send" />
                    <input type="reset" class="btn btn-default" value="Reset" />
                </div>
                
                </form>

            </div>

              <div class="style">
                <form method="POST" action="controllers/divers.php">
                <div class="form-group">
                    <label>Modify event: </label>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Id event </label>
                    <input type="number" class="form-control"  min='1' value="1" required name="idevent">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Select  </label>
                    <select name="choix">
                        <option value="nom">Nom</option>
                        <option value="description">Description</option>
                       <!-- <option value="heuredebut">Heure debut</option>
                        <option value="heurefin">Heure fin</option>
                        <option value="datevent">Date</option>
                        <option value="images">Image</option>
-->       
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Modify event </label>
                    <input type="text" class="form-control"  required name="messagemodif">
                </div>
                <div class="addevent">
                    <input type="submit" class="btn btn-default" value="Send" />
                    <input type="reset" class="btn btn-default" value="Reset" />
                </div>
                
                </form>

            </div>

        </div>

    
</div>

<?php
    $header->getFooter();

?>
</body>
</html>