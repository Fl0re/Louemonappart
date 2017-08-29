
<?
$id= $_POST['id'];
$favoris= $_SESSION['user']['id'];
$bdd = new BddManager();









$favorisRepository = $bdd->getFavorisRepository();
$favorisRepository -> favoris($id, $favoris);



 Flight::redirect('cool');
 