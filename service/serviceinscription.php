<?php

// include "../autoloader.php";
// include"../Flight/Flight.php";

$prenom= $_POST["prenom"];
$nom= $_POST["nom"];
$email= $_POST["email"];
$mdp= $_POST["mdp"];



$inscription = new Inscription();
$bdd = new BddManager();

$inscription->setPrenom($prenom);
$inscription->setNom($nom);
$inscription->setEmail($email);
$inscription->setMdp($mdp);


$InscriptionRepository = $bdd->getInscriptionRepository();
$InscriptionRepository -> insertInscription($inscription);

 Flight::redirect('accueil');


