<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="75"/>
    <title>Vybz -- Insert </title>
    <link  rel="stylesheet" href="css/insert.css" type="text/css"/>
  

        <?php 
            include "header.php";
        ?>
<div class="uk-container uk-container-large uk-padding" >
  <h2>Insert an event</h2>
  <div class="uk-container uk-container-small">
  <form method="POST" action="traitement/action.php">
    <fieldset class="uk-fieldset">

        <div class="uk-margin">
        <label class="uk-form-label" style="font-size:19px;" for="texte">Nom</label>
            <input class="uk-input" name="name" type="text" required="required" id="texte" placeholder="Input">
        </div>


        <div class="uk-margin">
        <label class="uk-form-label" style="font-size:19px;" for="description">Description</label>
            <textarea class="uk-textarea" name="description" rows="5" maxlength="200" required="required" id="description" placeholder="Textarea"></textarea>
        </div>

      <div class="uk-margin">
        <label class="uk-form-label" style="font-size:19px;" for="date">Date</label>
        <input class="uk-input" type="date"  name="dates" required="required" id="date" value="2018-03-25"/>
      </div>
      <div class="uk-margin">
        <label class="uk-form-label" style="font-size:19px;" for="hour">Time</label>
        <input class="uk-input" type="time"  name="time" required="required" id="hour" value="22:30"/>
        </div>

        <div class="uk-margin">
        <label class="uk-form-label" style="font-size:19px;" for="image">Picture</label>
            <select class="uk-select" id="image" name="images">
           
                <option value="https://picsum.photos/300/400" >Default</option>
                <option value="https://picsum.photos/300/400/?random" >Random</option>
                <option value="https://picsum.photos/g/300/400" selected="selected">Grayscale</option>
                <option value="https://picsum.photos/g/300/400/?random" selected="selected">Grayscale Random</option>
                <option value="https://picsum.photos/300/400/?gravity=east">East</option>
                <option value="https://picsum.photos/300/400/?gravity=west">West</option>
                <option value="https://picsum.photos/300/400/?gravity=north">North</option>
                <option value="https://picsum.photos/300/400/?gravity=south">South</option>
                <option value="https://picsum.photos/300/400/?gravity=center">Center</option>
                <option value="https://picsum.photos/g/300/400/?gravity=east">Grayscale East</option>
                <option value="https://picsum.photos/g/300/400/?gravity=west">Grayscale West</option>
                <option value="https://picsum.photos/g/300/400/?gravity=north">Grayscale North</option>
                <option value="https://picsum.photos/g/300/400/?gravity=south">Grayscale South</option>
                <option value="https://picsum.photos/g/300/400/?gravity=center">Grayscale Center</option>
            </select>
        </div>
        <div class="uk-margin">
        <label class="uk-form-label" style="font-size:19px;" for="price">Prix</label>
        <input class="uk-input" type="text" maxlength="6" name="prix" required="required" id="price" placeholder="prix"/>
        </div>
      
        <div class="uk-margin">
            <input class="uk-button uk-button-primary uk-width-1-4@m" type="submit" value="Send" />
        </div>

    </fieldset>
</form>
  </div>
</div>


<?php
  include "footer.php";
?>
