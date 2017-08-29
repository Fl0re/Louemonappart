<?


$id= $_POST['id'];
$id_locataire= $_SESSION['user']['id'];
$bdd = new BddManager();


$AnnonceRepository = $bdd->getAnnonceRepository();
$annonce= $AnnonceRepository -> getAnnonceById($id);
$annonce -> setEtat(true);
$annonce -> setId_locataire($id_locataire);
$annonce -> setId($id);






$AnnonceRepository = $bdd->getAnnonceRepository();
$AnnonceRepository -> reservation($annonce);

 Flight::redirect('cool');