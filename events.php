<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   <!-- <meta http-equiv="refresh" content="75"/> -->
    <title>Vybz -- Events</title>
    <link rel='stylesheet' href='css/list.css' type='text/css'/>
    
<?php

include "header.php";
include "traitement/connexion.php";

print("");
  if(empty($_GET['page'])){
    $page=1;
  }
  else{
    $page=$_GET['page'];
  }
  $nbre=3;
  $pages = ($page-1)*$nbre; // postion de l'element
 // print("position:".$pages);
  
  
?>

  <div class="uk-container uk-container-large uk-padding"  >
      <h2>Events</h2>
<?php
  $connect =  new Connexion();
  $connect->nbrePages($pages,$nbre);
?>
</div>


</div>

 <?php
 include ('footer.php');
 ?>
