<?php
include "index.php";
include "traitement/connexion.php"	
	if(!empty($_GET['action'])){
		print("Ok");
	}
	else{
		print("No");
	}
	
$connect = new Connexion();
$requete="select * from book where id=".$_GET['action']."";
print ($requete);
$connect->getAction($requete);

	
	
	
	
?>

<div class="uk-container uk-container-large uk-padding">
  <h2>Update an event</h2>
  <div class="uk-container uk-container-small">
  <form method="POST" action="traitement/action.php">
    <fieldset class="uk-fieldset">

        <div class="uk-margin">
        <label class="uk-form-label" style="font-size:19px;" for="texte">Nom</label>
            <input class="uk-input" name="name"type="text" id="texte" placeholder="Input">
        </div>


        <div class="uk-margin">
        <label class="uk-form-label" style="font-size:19px;" for="description">Description</label>
            <textarea class="uk-textarea" name="description" rows="5" maxlength="200" id="description" placeholder="Textarea"></textarea>
        </div>

      <div class="uk-margin">
        <label class="uk-form-label" style="font-size:19px;" for="description">Date</label>
        <input class="uk-input" type="date"  name="dates" value="2018-03-25"/>
        </div>

        <div class="uk-margin">
        <label class="uk-form-label" style="font-size:19px;" for="image">Picture</label>
            <select class="uk-select" id="image" name="images">
                <option value="random">Random</option>
                <option>Randon and gray</option>
                <option>gray</option>
                <option>East</option>
                <option>West</option>
                <option>North</option>
                <option>South</option>
            </select>
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
