<?php

// include "../autoloader.php";
// include"../Flight/Flight.php";

$titre= $_POST["titre"];
$ville= $_POST["ville"];
$tarif= $_POST["tarif"];
$propriete= $_POST["propriete"];
$statut= $_POST["statut"];
$superficie= $_POST["superficie"];
$dispo_debut= $_POST["dispo_debut"];
$dispo_fin= $_POST["dispo_fin"];
$description=$_POST["description"];
$photo_1= $_POST["photo_1"];
$photo_2=$_POST["photo_2"];
$photo_3=$_POST["photo_3"];



$annonce = new Annonce();
$bdd = new BddManager();

$annonce->setTitre($titre);
$annonce->setVille($ville);
$annonce->setTarif($tarif);
$annonce->setPropriete($propriete);
$annonce->setStatut($statut);
$annonce->setSuperficie($superficie);
$annonce->setDispo_debut($dispo_debut);
$annonce->setDispo_fin($dispo_fin);
$annonce->setDescription($description);
$annonce->setPhoto_1($photo_1);
$annonce->setPhoto_2($photo_2);
$annonce->setPhoto_3($photo_3);
$annonce->setId_inscription($_SESSION['user']['id']);



$AnnonceRepository = $bdd->getAnnonceRepository();
$AnnonceRepository -> insertAnnonce($annonce);

Flight::redirect('cool');
