<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="75"/>
    <title>Vybz -- Update</title>
  

  <?php 
  include "header.php";    
	include "traitement/connexion.php";
	
	if(isset($_GET['action'])){
		
	
		$connect = new Connexion();
		$resultat = $connect->isUpdate("select * from book where id='".$_GET['action']."'");
	}else{
		echo "Merde";
	}
?>
<div class="uk-container uk-container-large uk-padding">
  <h2>Update an event</h2>
  <div class="uk-container uk-container-small">
  <form method="POST" action="traitement/action.php">
    <fieldset class="uk-fieldset">

        <div class="uk-margin">
        <label class="uk-form-label" style="font-size:19px;" for="texte">Nom</label>
            <input class="uk-input" name="name" type="text"  required id="texte" value="<?php print $resultat['nom'];?>"/>
        </div>


        <div class="uk-margin">
        <label class="uk-form-label" style="font-size:19px;" for="description">Description</label>
            <textarea class="uk-textarea" name="description" rows="5" maxlength="200"  required id="description"><?php print $resultat['description'];?></textarea>
        </div>

      <div class="uk-margin">
        <label class="uk-form-label" style="font-size:19px;" for="date">Date</label>
        <input class="uk-input" type="date"  name="dates"  required id="date" value="<?php print $resultat['dates'];?>"/>
      </div>

			<div class="uk-margin">
        <label class="uk-form-label" style="font-size:19px;" for="hour">Time</label>
        <input class="uk-input" type="time"  name="time"  required id="hour" value="<?php print $resultat['heure'];?>"/>
      </div>

        <div class="uk-margin">
        <label class="uk-form-label" style="font-size:19px;" for="image">Picture</label>
				<select class="uk-select"  required id="image" name="images">
								<optgroup label="default image">
									<option value="<?php echo $resultat['affiche']; ?>" selected="selected">Picture by default</option>
								</optgroup>
								<optgroup label="new images">
                <option value="https://picsum.photos/200/300" >Default</option>
                <option value="https://picsum.photos/200/300/?random" >Random</option>
                <option value="https://picsum.photos/g/200/300" selected="selected">Grayscale</option>
                <option value="https://picsum.photos/g/200/300/?random" selected="selected">Grayscale Random</option>
                <option value="https://picsum.photos/200/300/?gravity=east">East</option>
                <option value="https://picsum.photos/200/300/?gravity=west">West</option>
                <option value="https://picsum.photos/200/300/?gravity=north">North</option>
                <option value="https://picsum.photos/200/300/?gravity=south">South</option>
                <option value="https://picsum.photos/200/300/?gravity=center">Center</option>
                <option value="https://picsum.photos/g/200/300/?gravity=east">Grayscale East</option>
                <option value="https://picsum.photos/g/200/300/?gravity=west">Grayscale West</option>
                <option value="https://picsum.photos/g/200/300/?gravity=north">Grayscale North</option>
                <option value="https://picsum.photos/g/200/300/?gravity=south">Grayscale South</option>
                <option value="https://picsum.photos/g/200/300/?gravity=center">Grayscale Center</option>
								</optgroup>
            </select>
        </div>
				<div class="uk-margin">
        <label class="uk-form-label" style="font-size:19px;" for="price">Prix</label>
        <input class="uk-input" type="text" maxlength="6" name="prix"  required id="price" value="<?php print $resultat['prix'];?>"/>
      </div>

				<div class="uk-margin">
            <input class="uk-input" name="id_book" type="hidden" required id="texte" value="<?php print $resultat['id'];?>">
        </div>
       

        <div class="uk-margin">
            <input class="uk-button uk-button-primary uk-width-1-4@m" type="submit" value="Send" />
        </div>

    </fieldset>
</form>
  </div>
</div>



<?php
include  "footer.php";
?>