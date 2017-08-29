<?php

// include "../autoloader.php";
// include"../Flight/Flight.php";

// $prenom= $_POST["prenom"];
// $nom= $_POST["nom"];

$description= $_POST["description"];
$id= $_POST['id'];

$commentaire= new Commentaire();

$bdd = new BddManager();

$commentaire->setDescription($description);



$CommentaireRepository = $bdd->getCommentaireRepository();
$CommentaireRepository -> insertCommentaire($commentaire, $id);



