<?php




$id= $_POST["id"];


$annonce = new Annonce();
$bdd = new BddManager();

$annonce->setId($id);


$annonceRepository = $bdd->getannonceRepository();
$annonceRepository -> deleteAnnonce($annonce);




?>
