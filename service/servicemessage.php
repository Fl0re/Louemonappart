<?php

// include "../autoloader.php";
// include"../Flight/Flight.php";

$prenom= $_POST["textes"];




$inscription = new Inscription();
$bdd = new BddManager();

$message->setTextes($textes);
$


$messageRepository = $bdd->getmessageRepository();
$messageRepository -> insertmessage($message);

//  Flight::redirect('accueil');



